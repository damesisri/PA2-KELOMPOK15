<?php

namespace App\Http\Controllers\Web;

use App\Models\Toilet;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Js;

class PemandianController extends Controller
{
    public function index(Request $request)
    {
        $toilet = Toilet::paginate(4);
        return view('pages.web.booking.main', compact('toilet'));
    }

    public function detail($id)
    {
        $toilet = Toilet::find($id);
        return view('pages.web.booking.detail', compact('toilet'));
    }

    // public function check(Toilet $toilet){
    //     return view('pages.web.toilet.check', compact('toilet'));
    // }

    public function makeBooking(Request $request, $id)
    {
        $validatedData = Validator::make($request->all(), [
            'username' => 'required',
            'book_date' => 'required|date',
            'book_time' => 'required|date_format:H:i',
            'person' => 'required|integer|min:1',
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validatedData->errors()->first()
            ]);
        }

        $toilet = Toilet::findOrFail($id);

        $booking = new Booking();
        $booking->user_id = auth()->user()->id;
        $booking->toilet_id = $toilet->id;
        $booking->username = $request->username;
        $booking->book_date = Carbon::createFromFormat('m/d/Y', $request->book_date)->format('Y-m-d');
        $booking->book_time = $request->book_time;
        $booking->person = $request->person;
        $booking->status = 'pending';
        // dd($request->all());

        $booking->save();
        // return redirect('pemandian')->with('success', 'Booking Success');
        return response()->json([
            'status' => 'success',
            'message' => 'Booking Success'
        ]);
    }
}
