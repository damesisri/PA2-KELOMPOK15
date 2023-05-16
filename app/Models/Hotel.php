<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
