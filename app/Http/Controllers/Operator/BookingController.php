<?php

namespace App\Http\Controllers\Operator;

use PDF;
use App\Models\Booking;
use App\Models\Toilet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $booking = Booking::paginate(10);
            return view('pages.operator.booking.list', compact('booking'));
        }
        return view('pages.operator.booking.main');
    }


    public function create()
    {
        $toilet = Toilet::get();
        return view('pages.operator.booking.create', compact('toilet'));
    }

    // public function show(Booking $booking)
    // {
    //     return view('pages.admin.booking.show', compact('booking'));
    // }

    public function accept(Booking $booking)
    {
        $booking->status = 'accepted';
        $booking->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diterima',
        ]);
    }

    public function reject(Booking $booking)
    {
        $booking->status = 'rejected';
        $booking->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil ditolak',
        ]);
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil dihapus',
        ]);
    }
    public function makeBooking(Request $request)
    {
        $request->validate([
            'toilet_id' => 'required',
            'book_date' => 'required',
            'book_time' => 'required',
            'person' => 'required',
        ]);

        $toilet = Toilet::find($request->toilet_id);

        $booking = new Booking();
        $booking->toilet_id = $toilet->id;
        $booking->user_id = Auth::user()->id;
        $booking->username = Auth::user()->name;
        $booking->book_date = $request->book_date;
        $booking->book_time = $request->book_time;
        $booking->person = $request->person;
        $booking->status = 'pending';
        $booking->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil dibuat',
            'redirect' => route('operator.booking.index')
        ]);
    }

    public function finish(Booking $booking)
    {
        $booking->status = 'Completed';
        $booking->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diselesaikan',
        ]);
    }

    public function pdf()
    {
        $now = Carbon::now()->translatedFormat('l, d F Y');
        $booking = Booking::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('pages.operator.booking.pdf', ['orders' => $booking]);
        // return $pdf->stream();
        return $pdf->download($now . '.pdf');
    }
}
