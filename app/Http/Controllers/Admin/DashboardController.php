<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Pemesanan;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Pemandian;
use App\Models\Penginapan;
=======
<<<<<<< HEAD
use App\Models\Pemandian;
use App\Models\Penginapan;
=======
use App\Models\Reservation;
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $year = now()->year;

        $users = User::where('role', '=', 'user')->get();
        $total_user = User::where('role', '=', 'user')->count();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
        $total_pemandians = Pemandian::where('status', '=', 'pending')->count();
        $total_penginapans = Penginapan::where('status', '=', 'pending')->count();
        $total_pemesanans = Pemesanan::where('status', '=', 'pending')->count();

        $januarySum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total');
        $februarySum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total');
        $marchSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total');
        $aprSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total');
        $maySum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total');
        $juneSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total');
        $julySum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total');
        $augustSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total');
        $sepSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total');
        $octSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total');
        $novSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total');
        $decSum = DB::table('transaksipemesanans')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total');

        $januariSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total_price');
        $februariSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total_price');
        $maretSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total_price');
        $aprilSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total_price');
        $meiSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total_price');
        $juniSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total_price');
        $juliSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total_price');
        $agustusSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total_price');
        $septemberSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total_price');
        $oktoberSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total_price');
        $novemberSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total_price');
        $desemberSum = DB::table('transaksipenginapans')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total_price');

        $januaryeSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total_price');
        $februaryeSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total_price');
        $marcheSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total_price');
        $aprieSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total_price');
        $mayeSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total_price');
        $junieSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total_price');
        $julyeSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total_price');
        $augusteSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total_price');
        $septembereSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total_price');
        $octobereSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total_price');
        $novembereSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total_price');
        $desembereSum = DB::table('transaksipemandians')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total_price');

        $yeartotalpemesanan = DB::table('transaksipemesanans')->whereYear('created_at', '=', $year)->sum('total');
        $yeartotalpemandian = DB::table('transaksipemandians')->whereYear('created_at', '=', $year)->sum('total_price');
        $yeartotalpenginapan = DB::table('transaksipenginapans')->whereYear('created_at', '=', $year)->sum('total_price');
        $yearpemesanan = DB::table('transaksipemesanans')->whereYear('created_at', '=', $year)->sum('total');
        $yearpemandian = DB::table('transaksipemandians')->whereYear('created_at', '=', $year)->sum('total_price');
        $yearpenginapan = DB::table('transaksipenginapans')->whereYear('created_at', '=', $year)->sum('total_price');

        // $total_user = User::count();



        return view('pages.admin.dashboard.main', compact('users', 'total_user', 'total_pemandians', 'total_pemesanans', 'total_penginapans', 'januarySum', 'februarySum', 'marchSum', 'aprSum', 'maySum', 'juneSum', 'julySum', 'augustSum', 'sepSum', 'octSum', 'novSum', 'decSum', 'januariSum', 'februariSum', 'maretSum', 'aprilSum', 'meiSum', 'juniSum', 'juliSum', 'agustusSum', 'septemberSum', 'oktoberSum', 'novemberSum', 'desemberSum', 'januaryeSum', 'februaryeSum', 'marcheSum', 'aprieSum', 'mayeSum', 'junieSum', 'julyeSum', 'augusteSum', 'septembereSum', 'octobereSum', 'novembereSum', 'desembereSum', 'yeartotalpemesanan', 'yeartotalpemandian', 'yeartotalpenginapan', 'yearpemesanan', 'yearpemandian', 'yearpenginapan'));
<<<<<<< HEAD
=======
=======
        $total_bookings = Booking::where('status', '=', 'pending')->count();
        $total_reservations = Reservation::where('status', '=', 'pending')->count();
        $total_order = Order::where('status', '=', 'pending')->count();

        $januarySum = DB::table('orders')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total');
        $februarySum = DB::table('orders')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total');
        $marchSum = DB::table('orders')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total');
<<<<<<< HEAD
        $aprSum = DB::table('orders')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total');
=======
        $aprilSum = DB::table('orders')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total');
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
        $maySum = DB::table('orders')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total');
        $juneSum = DB::table('orders')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total');
        $julySum = DB::table('orders')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total');
        $augustSum = DB::table('orders')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total');
<<<<<<< HEAD
        $sepSum = DB::table('orders')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total');
        $octSum = DB::table('orders')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total');
        $novSum = DB::table('orders')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total');
        $decSum = DB::table('orders')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total');

        $januariSum = DB::table('reservations')->whereMonth('created_at', '=', '1')->whereYear('created_at', '=', $year)->sum('total_price');
        $februariSum = DB::table('reservations')->whereMonth('created_at', '=', '2')->whereYear('created_at', '=', $year)->sum('total_price');
        $maretSum = DB::table('reservations')->whereMonth('created_at', '=', '3')->whereYear('created_at', '=', $year)->sum('total_price');
        $aprilSum = DB::table('reservations')->whereMonth('created_at', '=', '4')->whereYear('created_at', '=', $year)->sum('total_price');
        $meiSum = DB::table('reservations')->whereMonth('created_at', '=', '5')->whereYear('created_at', '=', $year)->sum('total_price');
        $juniSum = DB::table('reservations')->whereMonth('created_at', '=', '6')->whereYear('created_at', '=', $year)->sum('total_price');
        $juliSum = DB::table('reservations')->whereMonth('created_at', '=', '7')->whereYear('created_at', '=', $year)->sum('total_price');
        $agustusSum = DB::table('reservations')->whereMonth('created_at', '=', '8')->whereYear('created_at', '=', $year)->sum('total_price');
        $septemberSum = DB::table('reservations')->whereMonth('created_at', '=', '9')->whereYear('created_at', '=', $year)->sum('total_price');
        $oktoberSum = DB::table('reservations')->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', $year)->sum('total_price');
        $novemberSum = DB::table('reservations')->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', $year)->sum('total_price');
        $desemberSum = DB::table('reservations')->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', $year)->sum('total_price');


        $yeartotal = DB::table('orders')->whereYear('created_at', '=', $year)->sum('total');
        $yearreservation = DB::table('reservations')->whereYear('created_at', '=', $year)->sum('total_price');


        return view('pages.admin.dashboard.main', compact('users', 'total_user', 'total_bookings', 'total_order', 'total_reservations', 'januarySum', 'februarySum', 'marchSum', 'aprSum', 'maySum', 'juneSum', 'julySum', 'augustSum', 'sepSum', 'octSum', 'novSum', 'decSum', 'januariSum', 'februariSum', 'maretSum', 'aprilSum', 'meiSum', 'juniSum', 'juliSum', 'agustusSum', 'septemberSum', 'oktoberSum', 'novemberSum', 'desemberSum', 'yeartotal', 'yearreservation'));
=======
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
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    }
}
