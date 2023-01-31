<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pemesanan extends Model
{
    protected $table ='detail_pemesanans';
    protected $primarykey ='id';
    protected $fillable = [
        'pemesanan_id','pesawat','tanggal_beli','tanggal_berangkat', 'bandara_asal', 'bandara_tujuan',
    ];

    public function pemesanan(){
        return $this->belongsTo( pemesanan::class);
    }
    public function transaksi(){
        return $this->hasMany(transaksi::class);
    }
}


