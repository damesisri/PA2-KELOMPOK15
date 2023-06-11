<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', 'user')->get();
        $total_user = User::where('role', '=', 'user')->count();
        $total_bookings = Booking::where('status', '=', 'pending')->count();
        // $total_reservations = Reservation::where('status', '=', 'pending')->count();
        $total_order = Order::where('status', '=', 'pending')->count();
        // $total_order = Order::get();
        // dd($total_order);
        return view('pages.admin.dashboard.main', compact('users', 'total_user', 'total_bookings', 'total_order'));
    }
}
