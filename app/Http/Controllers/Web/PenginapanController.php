<?php

namespace App\Http\Controllers\Web;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenginapanController extends Controller
{
    public function index(Request $request)
    {
        $penginapan = Hotel::paginate(6);
        return view('pages.web.hotel.main', compact('penginapan'));
    }

    public function detail($id){
        $hotel = Hotel::find($id);
        return view('pages.web.hotel.detail', compact('hotel'));
    }
    
    public function booking(Hotel $hotel){
        return view('pages.web.hotel.booking', compact('hotel'));
    }

    
}
