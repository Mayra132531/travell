<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table ='pemesanans';
    protected $primarykey ='id';
    protected $fillable = [
        'name','email','no_telp','kota_asal',
    ];


    public function detail_pemesanan(){
        return $this->hasMany(detail_pemesanan::class, 'pemesanan_id', 'id');
    }
    public function transaksi(){
        return $this->hasMany(transaksi::class, 'detail_pemesanan_id', 'id');
    }
}

