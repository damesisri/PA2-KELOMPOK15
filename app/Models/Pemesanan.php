<?php

namespace App\Models;

use App\Models\User;
<<<<<<< HEAD
use App\Models\Product;
=======
use App\Models\PemesananDetail;
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
use App\Models\Transaction;
use App\Models\PemesananDetail;
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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
