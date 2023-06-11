<?php

namespace App\Http\Controllers\Web;

use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Notifications\NewBookingNotification;
use App\Notifications\UpdatePaymentNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    // public function check(Request $request)
    // {
    //     $hotel = Hotel::findOrFail($request->hotel_id);
    //     $checkin = Carbon::parse($request->checkin);
    //     $checkout = Carbon::parse($request->checkout);

    //     if ($hotel->isAvailable($checkin, $checkout)) {
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Kamar tersedia',
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Kamar tidak tersedia',
    //         ]);
    //     }
    // }
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
    public function store(Request $request, $id)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'checkin' => 'required',
            'checkout' => 'required',
            'adults' => 'required',
            'children' => 'nullable',
        ]);

        // Proses pengecekan ketersediaan kamar berdasarkan $validatedData
        $isRoomAvailable = /* logika pengecekan ketersediaan kamar */ true;

        if ($isRoomAvailable) {
            // Kamar tersedia, lanjutkan dengan proses pemesanan
            // ...

            return redirect()->back()->with('success', 'Kamar tersedia! Anda dapat melanjutkan pemesanan.');
        } else {
            // Kamar tidak tersedia, tampilkan pesan error
            return redirect()->back()->with('error', 'Maaf, kamar tidak tersedia untuk tanggal yang dipilih.');
        }
    }
}
