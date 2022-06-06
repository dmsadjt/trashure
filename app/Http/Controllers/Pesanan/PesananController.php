<?php

namespace App\Http\Controllers\Pesanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function pembayaran() {
        return view("pesanan.pembayaran");
    }

    public function DetailPesanan(){
        // $pesanan = DB::table('pesanans')->where('id', id)->get();

        return view('mitra.detail-pesanan');
    }


    public function AmbilPesanan(){
        // $pesanan = DB::table('pesanans')->where('id', id)->get();

        return view('mitra.ambil-pesanan');
    }


    public function SelesaikanPesanan(){
        // $pesanan = DB::table('pesanans')->where('id', id)->get();

        return view('mitra.selesaikan-pesanan');
    }
}
