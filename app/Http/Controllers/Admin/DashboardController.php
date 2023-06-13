<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $year = now()->year;

        $users = User::where('role', '=', 'user')->get();
        $total_user = User::where('role', '=', 'user')->count();
        $total_bookings = Booking::where('status', '=', 'pending')->count();
        // $total_reservations = Reservation::where('status', '=', 'pending')->count();
        $total_order = Order::where('status', '=', 'pending')->count();

        $januarySum = DB::table('orders')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total');
        $februarySum = DB::table('orders')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total');
        $marchSum = DB::table('orders')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total');
        $aprilSum = DB::table('orders')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total');
        $maySum = DB::table('orders')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total');
        $juneSum = DB::table('orders')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total');
        $julySum = DB::table('orders')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total');
        $augustSum = DB::table('orders')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total');
        $septemberSum = DB::table('orders')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total');
        $octoberSum = DB::table('orders')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total');
        $novemberSum = DB::table('orders')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total');
        $decemberSum = DB::table('orders')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total');

        // $januariSum = DB::table('reservation')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total');
        // $februariSum = DB::table('reservation')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total');
        // $maretSum = DB::table('reservation')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total');
        // $aprilSum = DB::table('reservation')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total');
        // $meiSum = DB::table('reservation')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total');
        // $juniSum = DB::table('reservation')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total');
        // $juliSum = DB::table('reservation')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total');
        // $agustusSum = DB::table('reservation')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total');
        // $septemberSum = DB::table('reservation')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total');
        // $oktoberSum = DB::table('reservation')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total');
        // $novemberSum = DB::table('reservation')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total');
        // $desemberSum = DB::table('reservation')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total');


        $yeartotal = DB::table('orders')->whereYear('created_at', '=', $year)->sum('total');


        return view('pages.admin.dashboard.main', compact('users', 'total_user', 'total_bookings', 'total_order', 'januarySum', 'februarySum', 'marchSum', 'aprilSum', 'maySum', 'juneSum', 'julySum', 'augustSum', 'septemberSum', 'octoberSum', 'novemberSum', 'decemberSum', 'yeartotal'));
    }
}
