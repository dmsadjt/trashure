<?php

namespace App\Http\Controllers\Pesanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pesanan;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function pembayaran() {
        $pesanans = DB::table('pesanans')->first();
        return view("pesanan.pembayaran", compact('pesanans'));
    }

    public function detailPesanan(){
        // $pesanan = DB::table('pesanans')->where('id', id)->get();

        return view('mitra.detail-pesanan');
    }


    public function ambilPesanan(){
        // $pesanan = DB::table('pesanans')->where('id', id)->get();

        return view('mitra.ambil-pesanan');
    }


    public function selesaikanPesanan(){
        // $pesanan = DB::table('pesanans')->where('id', id)->get();

        return view('mitra.selesaikan-pesanan');
    }
}
