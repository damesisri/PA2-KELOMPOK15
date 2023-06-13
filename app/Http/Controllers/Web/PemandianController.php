<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Toilet;
use App\Models\Booking;
use Illuminate\Support\Js;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Support\Facades\Validator;

class PemandianController extends Controller
{
    public function index(Request $request)
    {
        $toilet = Toilet::paginate(4);
        return view('pages.web.booking.main', compact('toilet'));
    }

    public function create()
    {
        $booking = Booking::all();

        return view('pages.web.booking.create', compact('booking'));
    }

    public function detail($id)
    {
        $toilet = Toilet::find($id);
        return view('pages.web.booking.detail', compact('toilet'));
    }

    public function PDF()
    {
        $booking = Booking::all();
        $pdf = PDF::loadview('pages.web.booking.pdf', compact('booking'));

        return $pdf->download('laporan-booking.pdf');
    }

    // public function check(Toilet $toilet){
    //     return view('pages.web.toilet.check', compact('toilet'));
    // }

    // public function makeBooking(Request $request, $toilet)
    // {
    //     $validatedData = Validator::make($request->all(), [
    //         'username' => 'required',
    //         'book_date' => 'required|date',
    //         'book_time' => 'required|date_format:H:i',
    //         'person' => 'required|integer|min:1',
    //     ]);

    //     if ($validatedData->fails()) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => $validatedData->errors()->first()
    //         ]);
    //     }

    //     // $toilet = Toilet::findOrFail($id);
    //     $booking = new Booking();
    //     $booking->user_id = auth()->user()->id;
    //     $booking->toilet_id = $toilet;
    //     $booking->username = $request->username;
    //     $booking->book_date = Carbon::createFromFormat('m/d/Y', $request->book_date)->format('Y-m-d');
    //     $booking->book_time = $request->book_time;
    //     $booking->person = $request->person;
    //     // $booking->status = 'pending';
    //     // dd($request->all());
    //     // dd($booking);

    //     $booking->save();

    //     // return redirect('pemandian.create')->with('success', 'Booking Berhasil Dibuat');
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Booking berhasil dibuat',

    //     ]);
    // }
    public function store(Request $request, $toilet)
    {
        // $validatedData = Validator::make($request->all(), [
        //     'username' => 'required',
        //     'book_date' => 'required|date',
        //     'book_time' => 'required|date_format:H:i',
        //     'person' => 'required|integer|min:1',
        // ]);

        // if ($validatedData->fails()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => $validatedData->errors()->first()
        //     ]);
        // }
        $request->validate([
            'username' => 'required',
            'book_date' => 'required|date',
            'book_time' => 'required|date_format:H:i',
            'person' => 'required|integer|min:1',
        ]);


        // $toilet = Toilet::findOrFail($id);
        // dd($toilet);
        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->toilet_id = $toilet;
        $booking->username = $request->username;
        $booking->book_date = Carbon::createFromFormat('m/d/Y', $request->book_date)->format('Y-m-d');
        $booking->book_time = $request->book_time;
        $booking->person = $request->person;
        $booking->status = 'pending';
        // dd($request->all());
        // dd($booking);

        $booking->save();

        $notification = new Notification;
        $notification->user_id = 2;
        $notification->message = 'mendapatkan Pesanan Booking dari  ' . Auth::user()->name;
        $notification->type = 'success';
        $notification->save();

        return redirect()->route('web.pemandian.create')->with('success', 'Booking Berhasil Dibuat');
        // return response()->json([
        //     'status' => 'succes
        //     'message' => 'Booking berhasil dibuat',
        //     'redirect' => route('web.pemandian.create')


        // ]);
    }
}
