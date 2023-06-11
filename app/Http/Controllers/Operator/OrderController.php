<?php

namespace App\Http\Controllers\Operator;

use App\Helpers\Helper;
use PDF;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
                ->select('orders.*', 'users.name')
                ->where('orders.status', 'like', '%' . $request->keyword . '%')
                ->orWhere('users.name', 'like', '%' . $request->keyword . '%')
                ->orWhere('orders.created_at', 'like', '%' . $request->keyword . '%')
                ->orWhere('phone', 'like', '%' . $request->keyword . '%')
                ->orWhere('address', 'like', '%' . $request->keyword . '%')
                ->orWhere('orders.total', 'like', '%' . $request->keyword . '%')
                ->orWhere('postal_code', 'like', '%' . $request->keyword . '%')
                ->paginate(10);
            return view('pages.operator.orders.list', compact('orders'));
        }
        return view('pages.operator.orders.main');
    }

    public function create()
    {
        $product = Product::get();
        return view('pages.operator.orders.create', compact('product'));
    }

    public function show(Order $order)
    {
        return view('pages.operator.orders.show', compact('order'));
    }

    public function accept(Order $order)
    {
        $order->status = 'accepted';
        $order->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diterima',
        ]);
    }
    public function makeOrder(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
        ]);


        $product = Product::find($request->product_id);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->code = Helper::IDGenerator();
        $order->payment = 'Cash';
        $order->status = 'pending';
        $order->total = $product->price * $request->quantity;
        $order->save();

        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $order->id;
        $orderDetail->product_id = $request->product_id;
        $orderDetail->quantity = $request->quantity;
        $orderDetail->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil dibuat',
            'redirect' => route('operator.order.index')
        ]);
    }

    public function reject(Order $order)
    {
        $order->status = 'rejected';
        $order->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil ditolak',
        ]);
    }
    public function finish(Order $order)
    {
        $order->status = 'completed';
        $order->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diselesaikan',
        ]);
    }
    public function pdf()
    {
        $now = Carbon::now()->translatedFormat('l, d F Y');
        $orders = Order::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('pages.operator.orders.pdf', ['orders' => $orders]);
        // return $pdf->stream();
        return $pdf->download($now . '.pdf');
    }
}
