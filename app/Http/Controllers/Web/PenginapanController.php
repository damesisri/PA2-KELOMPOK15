<?php

namespace App\Http\Controllers\Web;

use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Notification;
use App\Notifications\NewBookingNotification;
use App\Notifications\UpdatePaymentNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PenginapanController extends Controller
{
    public function index(Request $request)
    {
        $penginapan = Hotel::paginate(10);
        return view('pages.web.hotel.main', compact('penginapan'));
    }

    public function detail($id)
    {
        $hotel = Hotel::find($id);
        return view('pages.web.hotel.detail', compact('hotel'));
    }

    public function check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hotel_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'adult' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }
        $hotel = Hotel::findOrFail($request->hotel_id);
        $checkin = Carbon::parse($request->check_in);
        $checkout = Carbon::parse($request->check_out);
        $adult = $request->adult;
        $children = $request->children;
        $jumlah_kamar_telah_dibooking = $hotel->reservations()
            ->where('checkin_date', '<=', $checkout)
            ->where('checkout_date', '>=', $checkin)
            ->count('hotel_id');


        $jumlah_kamar_tersedia = $hotel->stock - $jumlah_kamar_telah_dibooking;
        // hitung kapasitas kamar
        // kapasitas 1 kamar yaitu 2 orang dewasa
        $jumlah_kamar_needed = ceil($adult / 2);

        // apabila jumlah kamar tersedia

        if ($jumlah_kamar_tersedia == 0) {
            return response()->json([
                'status' => 'success',
                'isAvailable' => 0,
                'message' => "Kamar tidak tersedia!",
                'hotel' => $hotel,
                'jumlah_kamar_telah_dibooking' => $jumlah_kamar_telah_dibooking,
                'jumlah_kamar_needed' => $jumlah_kamar_needed
            ]);
        }

        if ($jumlah_kamar_tersedia >= $jumlah_kamar_needed) {
            return response()->json([
                'status' => 'success',
                'isAvailable' => 1,
                'message' => "Kamar tersedia! Anda harus memesan " . $jumlah_kamar_needed . " kamar. 1 Kamar hanya bisa ditempati oleh 2 orang dewasa.",
                'hotel' => $hotel,
                'jumlah_kamar_telah_dibooking' => $jumlah_kamar_telah_dibooking,
                'jumlah_kamar_needed' => $jumlah_kamar_needed
            ]);
        }

        // apabila jumlah kamar yang tersedia lebih kecil dari jumlah kamar yang diperlukan
        if ($jumlah_kamar_tersedia < $jumlah_kamar_needed) {
            return response()->json([
                'status' => 'success',
                'isAvailable' => 1,
                'message' => "Kamu butuh " . $jumlah_kamar_needed . " kamar. Namun hanya ada " . $jumlah_kamar_tersedia . " kamar yang tersedia. 1 Kamar hanya bisa ditempati oleh 2 orang dewasa.",
                'hotel' => $hotel,
                'jumlah_kamar_telah_dibooking' => $jumlah_kamar_telah_dibooking,
                'jumlah_kamar_needed' => $jumlah_kamar_needed
            ]);
        }
    }
    // public function create($id, Request $request)
    // {
    //     $this->setMeta('Booking');
    //     $dates = explode(' > ', $request->date);

    //     $adults = $request->adults;
    //     $children = $request->children;
    //     $checkin = Carbon::createFromFormat('d/m/Y', $dates[0])->format('Y-m-d');
    //     $checkout = Carbon::createFromFormat('d/m/Y', $dates[1])->format('Y-m-d');
    //     $hotel = Hotel::findOrFail($id);

    //     $total = $hotel->price_per_night * $hotel->getDays($checkin, $checkout);
    // }

    // public function store(Request $request)
    // {
    //     $hotel = Hotel::findOrFail($request->hotel_id);
    //     $number = Reservation::count() ? Reservation::latest()->first()->id + 1 : 1;
    //     $reservation = $hotel->reservations()->create([
    //         'code' => 'RESERVATION-' . $number,
    //         'user_id' => Auth::user()->id,
    //         'checkin' => Carbon::parse($request->checkin)->format('Y-m-d'),
    //         'checkout' => Carbon::parse($request->checkout)->format('Y-m-d'),
    //         'adults' => $request->adults,
    //         'children' => $request->children,
    //         'total_price' => $request->total,
    //     ]);

    //     return redirect()->route('penginapan.create', $reservation->id)->with('success', 'Berhasil melakukan reservasi');
    // }

    // public function cancel($id)
    // {
    //     $reservation = Reservation::findOrFail($id);
    //     $reservation->update([
    //         'status' => 'canceled',
    //     ]);

    //     $reservation->hotel->owner->notify(new NewBookingNotification($reservation, 'canceled'));

    //     return response()->json([
    //         'alert' => 'success',
    //         'message' => 'Berhasil membatalkan reservasi',
    //     ]);
    // }

    // public function update(Request $request, $d)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'message' => 'Bukti pembayaran tidak valid.'
    //         ], 422);
    //     }
    //     $reservation = Reservation::findOrFail($id);
    //     $number = $reservation->id;
    //     $file = $request->file('file');
    //     $fileName = 'PAYMENT-PROOF-' . $number . '.' . $file->getClientOriginalExtension();
    //     $file->move(public_path('images/payment-proofs'), $fileName);
    //     $reservation = Reservation::findOrFail($id);

    //     $reservation->update([
    //         'status' => 'completed',
    //         'payment_status' => '1', // '1' = 'pending
    //         'payment_proof' => $fileName,
    //     ]);

    //     // send notification
    //     $reservation->hotel->owner->notify(new UpdatePaymentNotification($reservation));

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Pemesanan berhasil diselesaikan.'
    //     ]);
    // }

    public function book(Request $request)
    {
        $hotelId = $request->input('hotel_id');
        $price = $request->input('price');
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $hotel = Hotel::findOrFail($hotelId);
        $price = $hotel->price * $hotel->getDays($checkin, $checkout);
        return view('pages.web.hotel.booking', compact('hotelId', 'price', 'checkin', 'checkout', 'adults', 'children', 'price'));
    }

    public function storeReservation(Request $request)
    {
        $hotelId = $request->hotel_id;
        $price = $request->price;
        $checkin = Carbon::createFromFormat('m/d/Y', $request->checkin)->format('Y-m-d');
        $checkout = Carbon::createFromFormat('m/d/Y', $request->checkout)->format('Y-m-d');
        $adults = $request->adults;
        $children = $request->children;

        $reservation = new Reservation();
        $reservation->hotel_id = $hotelId;
        $reservation->user_id = auth()->user()->id; // Assuming you have authentication implemented
        $reservation->checkin_date = $checkin;
        $reservation->checkout_date = $checkout;
        $reservation->adults = $adults;
        $reservation->children = $children;
        $reservation->total_price = $price;
        $reservation->save();

        $notification = new Notification;
        $notification->user_id = 2;
        $notification->message = 'mendapatkan Pesanan Kamar dari  ' . Auth::user()->name;
        $notification->type = 'success';
        $notification->save();

        return redirect()->route('web.penginapan.create', $reservation->id)->with('success', 'Berhasil melakukan Pemesanan');
        // return redirect()->route('reservation.confirmation', $reservation->id);
    }

    public function create(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     // 'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // if ($validator->fails()) {
        //     return response()->json([
        //         'message' => 'Bukti pembayaran tidak valid.'
        //     ], 422);
        // }

        $reservation = Reservation::findOrFail($id);
        $number = $reservation->id;
        // $file = $request->file('file');
        // $fileName = 'PAYMENT-PROOF-' . $number . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('images/payment-proofs'), $fileName);
        $reservation = Reservation::findOrFail($id);

        // $reservation->update([
        //     'status' => 'completed',
        //     'payment_status' => '1', // '1' = 'pending
        //     // 'payment_proof' => $fileName,
        // ]);


        // send notification
        // $reservation->hotel->owner->notify(new UpdatePaymentNotification($reservation));

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Pemesanan berhasil diselesaikan.'
        // ]);
        return view('pages.web.hotel.create', compact('reservation'));
    }

    public function updatePayment(Request $request)
    {
        // $validators = Validator::make($request->all(), [
        //     'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $request->validate([
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if ($validators->fails()) {
        //     return response()->json([
        //         'alert' => 'error',
        //         'message' => $validators->errors()->first(),
        //     ]);
        // }

        $order = Reservation::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();
        $file = $request->file('payment_proof');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/bukti_pembayaran'), $filename);
        $order->payment_proof = $filename;
        $order->save();

        // return response()->json([
        //     'alert' => 'success',
        //     'message' => 'Bukti pembayaran berhasil diupload',
        // ]);
        return view('pages.web.hotel.payment')->with('success', 'Bukti pembayaran berhasil diupload');
    }
}
