<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table  = "transaksis";
    protected $guarded = [
        'id'
    ];

       public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
    public function detail_pemesanan()
    {
        return $this->belongsTo(Detail_pemesanan::class);
    }
}
