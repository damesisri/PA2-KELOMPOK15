<?php

namespace App\Http\Controllers\Operator;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role', '=', 'user')->get();
        $total_user = User::where('role', '=', 'user')->count();
        $total_order = Order::where('status', '=', 'pending')->count();
        return view('pages.operator.dashboard.main', compact('total_user', 'total_order', 'users'));
    }
}
