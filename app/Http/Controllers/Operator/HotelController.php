<?php

namespace App\Http\Controllers\Operator;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $hotel = Hotel::where('title', 'like', '%' . $request->keyword . '%')
                ->orWhere('description', 'like', '%' . $request->keyword . '%')
                ->orWhere('price', 'like', '%' . $request->keyword . '%')
                ->orWhere('stock', 'like', '%' . $request->keyword . '%')
                ->orWhere('category', 'like', '%' . $request->keyword . '%')
                ->paginate(10);
            return view('pages.operator.hotel.list', compact('hotel'));
        }
        return view('pages.operator.hotel.main');
    }
}
