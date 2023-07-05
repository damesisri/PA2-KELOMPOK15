<?php

namespace App\Http\Controllers\Operator;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Penginapan;
=======
<<<<<<< HEAD
use App\Models\Penginapan;
=======
use App\Models\Reservation;
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
<<<<<<< HEAD
            // $hotel = penginapan::where('title', 'like', '%' . $request->keyword . '%')
=======
<<<<<<< HEAD
            // $hotel = penginapan::where('title', 'like', '%' . $request->keyword . '%')
=======
            // $hotel = Reservation::where('title', 'like', '%' . $request->keyword . '%')
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
            //     ->orWhere('description', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('price', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('stock', 'like', '%' . $request->keyword . '%')
            //     ->orWhere('category', 'like', '%' . $request->keyword . '%')
            //     ->paginate(10);
<<<<<<< HEAD
            $hotel = Penginapan::paginate(10);
=======
<<<<<<< HEAD
            $hotel = Penginapan::paginate(10);
=======
            $hotel = Reservation::paginate(10);
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
            return view('pages.operator.hotel.list', compact('hotel'));
        }
        return view('pages.operator.hotel.main');
    }

    public function create()
    {
        $hotel = Hotel::get();
        return view('pages.operator.hotel.create', compact('hotel'));
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    public function show(Penginapan $penginapan)
    {
        return view('pages.operator.orders.show', compact('penginapan'));
    }

    public function accept(Penginapan $penginapan)
    {
        $penginapan->status = 'accepted';
        $penginapan->save();
<<<<<<< HEAD
=======
=======
    public function show(Reservation $reservation)
    {
        return view('pages.operator.orders.show', compact('reservation'));
    }

    public function accept(Reservation $reservation)
    {
        $reservation->status = 'accepted';
        $reservation->save();
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diterima',
        ]);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    public function makePenginapan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hotel_id' => 'required',
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'adults' => 'required',
            // 'children' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $hotel = Hotel::find($request->hotel_id);

        $penginapan = new Penginapan();
        $penginapan->hotel_id = $hotel->id;
        $penginapan->user_id = Auth::user()->id;
        $penginapan->checkin_date = $request->checkin_date;
        $penginapan->checkout_date = $request->checkout_date;
        $penginapan->adults = $request->adults;
        // $penginapan->children = $request->children;
        $penginapan->total_price = $hotel->price * $request->adults;
        $penginapan->payment_proof = 'Cash';
        $penginapan->status = 'pending';
        $penginapan->save();
<<<<<<< HEAD
=======
=======
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
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil dibuat',
            'redirect' => route('operator.hotel.index')
        ]);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    public function reject(Penginapan $penginapan)
    {
        $penginapan->status = 'rejected';
        $penginapan->save();
<<<<<<< HEAD
=======
=======
    public function reject(Reservation $reservation)
    {
        $reservation->status = 'rejected';
        $reservation->save();
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil ditolak',
        ]);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    public function finish(Penginapan $penginapan)
    {
        $penginapan->status = 'completed';
        $penginapan->save();
<<<<<<< HEAD
=======
=======
    public function finish(Reservation $reservation)
    {
        $reservation->status = 'completed';
        $reservation->save();
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil diselesaikan',
        ]);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20

    public function destroy(Penginapan $penginapan)
    {
        $penginapan->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil dihapus',
        ]);
    }

    public function pdf()
    {
        $now = Carbon::now()->translatedFormat('l, d F Y');
        $penginapans = Penginapan::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('pages.operator.hotel.pdf', ['penginapans' => $penginapans]);
<<<<<<< HEAD
=======
=======
    public function pdf()
    {
        $now = Carbon::now()->translatedFormat('l, d F Y');
        $reservations = Reservation::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('pages.operator.hotel.pdf', ['reservations' => $reservations]);
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
        // return $pdf->stream();
        return $pdf->download($now . '.pdf');
    }
}
