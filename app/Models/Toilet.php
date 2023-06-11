<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toilet extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'price',
        'stock',
        'date',
        'time',
        'description',
        'category',

    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderDetails()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
