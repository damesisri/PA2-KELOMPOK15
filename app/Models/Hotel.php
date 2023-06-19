<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
<<<<<<< HEAD
use App\Models\PemesananDetail;
use App\Models\Penginapan;
=======
use App\Models\OrderDetail;
use App\Models\Reservation;
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'room',
        'cover',
        'price',
        'stock',
        'description',
        'category',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function penginapans()
    {
        return $this->hasMany(Penginapan::class);
=======
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
    }

    public function getDays($checkin, $checkout)
    {
        $checkin = strtotime($checkin);
        $checkout = strtotime($checkout);
        $datediff = $checkout - $checkin;
        return round($datediff / (60 * 60 * 24));
    }
}
