<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{

    protected $fillable = [
        'id_pengguna','id_mitra','id_banks','jenis_sampah','volume','waktu_pemesanan','status_pesanan','opsi_pembayaran','alamat_pengguna'
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}
