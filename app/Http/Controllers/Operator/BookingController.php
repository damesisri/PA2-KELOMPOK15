<?php

namespace App\Http\Controllers\Operator;

use App\Models\Booking;
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
}
