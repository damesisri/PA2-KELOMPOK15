<?php

namespace App\Http\Controllers\Operator;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $hotel = Reservation::where('title', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('description', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('price', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('stock', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('category', 'like', '%' . $request->keyword . '%')
            //     ->paginate(10);
            $hotel = Reservation::paginate(10);
            return view('pages.operator.hotel.list', compact('hotel'));
        }
        return view('pages.operator.hotel.main');
    }

    public function create()
    {
        $hotel = Hotel::get();
        return view('pages.operator.hotel.create', compact('hotel'));
    }

    public function show(Reservation $reservation)
    {
        return view('pages.operator.orders.show', compact('reservation'));
    }

    public function accept(Reservation $reservation)
    {
        $reservation->status = 'accepted';
        $reservation->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diterima',
        ]);
    }
    public function makeReservation(Request $request)
    {
        $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
            'adults' => 'required',
            'children' => 'required',
        ]);

        $hotel = Hotel::find($request->hotel_id);

        $reservation = new Reservation();
        $reservation->hotel_id = $hotel->id;
        $reservation->user_id = Auth::user()->id;
        $reservation->check_in = $request->check_in;
        $reservation->check_out = $request->check_out;
        $reservation->adults = $request->adults;
        $reservation->children = $request->children;
        $reservation->payment = 'Cash';
        $reservation->status = 'pending';
        $reservation->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil dibuat',
            'redirect' => route('operator.hotel.index')
        ]);
    }

    public function reject(Reservation $reservation)
    {
        $reservation->status = 'rejected';
        $reservation->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil ditolak',
        ]);
    }
    public function finish(Reservation $reservation)
    {
        $reservation->status = 'completed';
        $reservation->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diselesaikan',
        ]);
    }
    public function pdf()
    {
        $now = Carbon::now()->translatedFormat('l, d F Y');
        $reservations = Reservation::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('pages.operator.hotel.pdf', ['reservations' => $reservations]);
        // return $pdf->stream();
        return $pdf->download($now . '.pdf');
    }
}
