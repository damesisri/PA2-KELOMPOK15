<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Toilet;
use App\Models\Pemandian;
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
        $toilet = Toilet::paginate(11);
        return view('pages.web.booking.main', compact('toilet'));
    }

    public function history()
    {
        $pemandian = Pemandian::all();

        return view('pages.web.booking.history', compact('pemandian'));
    }

    public function detail($id)
    {
        $toilet = Toilet::find($id);
        return view('pages.web.booking.detail', compact('toilet'));
    }

    public function PDF()
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    {
        $pemandian = Pemandian::all();
        $pdf = PDF::loadview('pages.web.booking.pdf', compact('pemandian'));

        return $pdf->download('laporan-booking.pdf');
    }


    public function check(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'book_date' => 'required|date|after_or_equal:today|unique:transaksipemandians,book_date,NULL,id,toilet_id,' . $request->toilet_id,
            'book_time' => 'required',
            'person' => 'required',
        ], [
            'book_date.required' => 'Tanggal booking harus diisi.',
            'book_date.after_or_equal' => 'Tanggal booking harus setelah atau sama dengan hari ini.',
            'book_date.unique' => 'Toilet sudah dibooking pada tanggal tersebut.',
            'book_time.required' => 'Waktu booking harus diisi.',
            'person.required' => 'Jumlah orang harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Booking tersedia pada tanggal dan waktu tersebut'
        ]);
    }

    public function book(Request $request)
    {
        $toiletId = $request->input('toilet_id');
        $bookDate = $request->input('book_date');
        $bookTime = $request->input('book_time');
        $person = $request->input('person');
        $toilet = Toilet::find($toiletId);
        $price = $toilet->price;

        return view('pages.web.booking.booking', compact('toiletId', 'bookDate', 'bookTime', 'person', 'price'));
    }

    public function storeReservation(Request $request)
    {
        // dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     ''

        $toiletId = $request->toilet_id;
        $price = $request->price;
        $bookDate = Carbon::parse($request->bookDate)->format('Y-m-d');
        $bookTime = $request->bookTime;
        $person = $request->person;

        $pemandian = new Pemandian();
        $pemandian->toilet_id = $toiletId;
        $pemandian->user_id = auth()->user()->id; // Assuming you have authentication implemented
        $pemandian->book_date = $bookDate;
        $pemandian->book_time = $bookTime;
        $pemandian->person = $person;
        $pemandian->total_price = $price;

        $pemandian->save();

        $notification = new Notification;
        $notification->user_id = 2;
        $notification->message = 'mendapatkan Pesanan Kamar dari  ' . Auth::user()->name;
        $notification->type = 'success';
        $notification->save();

        return redirect()->route('web.pemandian.create', $pemandian->id)->with('success', 'Booking Berhasil Dibuat');
    }

    public function create(Request $request, $id)
    {

        $pemandian = Pemandian::findOrFail($id);
        $number = $pemandian->id;
        $pemandian = Pemandian::findOrFail($id);

        return view('pages.web.booking.create', compact('pemandian'));
    }
    public function updatePayment(Request $request)
    {
        $request->validate([
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $order = Pemandian::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();
        $file = $request->file('payment_proof');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/bukti_pembayaran'), $filename);
        $order->payment_proof = $filename;
        $order->save();

        return view('pages.web.booking.payment', compact('order'))->with('success', 'Bukti pembayaran berhasil diupload');
    }
}
