<?php

namespace App\Http\Controllers\Admin;

use PDF;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = Order::where('user_id', auth()->guard('web')->user()->id)
                ->where('status', 'like', '%' . $request->keyword . '%')
                ->orWhere('orders.total', 'like', '%' . $request->keyword . '%')
                ->orWhere('code', 'like', '%' . $request->keyword . '%')
                ->paginate(10);
            return view('pages.admin.orders.list', compact('orders',));
        }
        return view('pages.admin.orders.main');
    }

    public function show(Order $order)
    {
        return view('pages.admin.orders.show', compact('order'));
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
