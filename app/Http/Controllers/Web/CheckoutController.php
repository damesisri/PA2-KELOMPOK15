<?php

namespace App\Http\Controllers\Web;

use PDF;
use App\Helpers\Helper;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Province;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Subdistrict;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function customer(Request $request)
    {
        return view('pages.web.checkout.customer');
    }

    public function updateCustomer(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'fullname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required'
        ]);

        if ($validators->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validators->errors()->first(),
            ]);
        }

        $user = User::find(Auth::user()->id);
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil disimpan',
        ]);
    }

    public function payment()
    {
        return view('pages.web.checkout.payment');
    }

    public function updatePayment(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validators->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validators->errors()->first(),
            ]);
        }

        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/bukti_pembayaran'), $filename);
        $order->image = $filename;
        $order->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Bukti pembayaran berhasil diupload',
        ]);
    }
    public function checkout(Request $request)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $total = 0;

        foreach ($cart as $c) {
            $total = $total + ($c->quantity * $c->product->price);
        }

        $order = new Order();
        $order->code = Helper::IDGenerator();
        $order->user_id = Auth::user()->id;
        $order->total = $total;
        // $order->delivery = $request->shippingMethod;
        // $file = $request->file('image');
        // $filename = time() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('images/bukti_pembayaran'), $filename);
        // $order->image = $filename;
        $order->save();
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($cart as $c) {
            $order_detail = new OrderDetail;
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $c->product_id;
            $order_detail->quantity = $c->quantity;
            $order_detail->save();
            $product = Product::find($c->product_id);
            $product->stock = $product->stock - $c->quantity;
            $product->update();
        }
        Cart::where('user_id', Auth::user()->id)->delete();

        return view('pages.web.checkout.detail', ['order' => $order]);
    }

    public function pdf(Order $order)
    {
        // $coupons = Coupon::where('id', $order->coupon_id)->get();/
        $pdf = PDF::loadView('pages.web.checkout.pdf', [
            'order' => $order,
            // 'coupons' => $coupons
        ]);
        // return $pdf->stream();
        return $pdf->download($order->code . ' - ' . $order->created_at->format('d-m-Y') . '.pdf');
    }
}
