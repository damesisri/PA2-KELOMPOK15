<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use App\Models\OrderDetail;
use App\Models\Reservation;
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

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function getDays($checkin, $checkout)
    {
        $checkin = strtotime($checkin);
        $checkout = strtotime($checkout);
        $datediff = $checkout - $checkin;
        return round($datediff / (60 * 60 * 24));
    }
}
