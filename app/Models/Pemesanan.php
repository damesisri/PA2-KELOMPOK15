<?php

namespace App\Models;

use App\Models\User;
use App\Models\PemesananDetail;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'transaksipemesanans';
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pemesananDetails()
    {
        return $this->hasMany(PemesananDetail::class, 'transaksipemesanan_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
