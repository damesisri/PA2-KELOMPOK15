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
            $booking = Booking::where('user_id', 'like', '%' . $request->keyword . '%')
                ->orWhere('toilet_id', 'like', '%' . $request->keyword . '%')
                ->orWhere('username', 'like', '%' . $request->keyword . '%')
                ->orWhere('book_date', 'like', '%' . $request->keyword . '%')
                ->orWhere('book_time', 'like', '%' . $request->keyword . '%')
                ->orWhere('person', 'like', '%' . $request->keyword . '%')
                ->orWhere('status', 'like', '%' . $request->keyword . '%')
                ->latest()->paginate(10);
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

    public function PDF()
    {
        $booking = Booking::all();
        $pdf = PDF::loadview('pages.operator.booking.pdf', compact('booking'));

        return $pdf->download('laporan-booking.pdf');
    }
}
