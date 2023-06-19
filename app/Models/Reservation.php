<?php

namespace App\Models;

use App\Models\User;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
<<<<<<< HEAD
    protected $table = 'reservations';
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function getDays($checkin, $checkout)
    {
        $checkin = strtotime($checkin);
        $checkout = strtotime($checkout);
        $datediff = $checkout - $checkin;
        return round($datediff / (60 * 60 * 24));
    }
=======
    protected $table = 'reervation';
    protected $fillable = ['name', 'availability', 'price'];
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
}
