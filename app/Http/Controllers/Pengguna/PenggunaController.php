<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function daftarpesananpengguna() {
        return view("pengguna.daftarpesananpengguna");
    }

    public function pesanpengguna() {
        return view("pesanan.halamanpesanan");
    }

    public function pilihAlamat(Request $request){
        $pesanan = $request->session()->get('pesanan');
        return view('pengguna.pilih_alamat',compact('pesanan'));
    }

    public function pilihsampahh(Request $request) {
        $pesanan = $request->session()->get('pesanan');

        return view("pesanan.pilihsampah",compact('pesanan'));
    }

    public function postSampah(Request $request){

        dd($request);
        $validated = $request->validate([
            'jenis_sampah' => '',
            'volume' => '',
        ]);

        if(empty($request->session()->get('pesanan'))){
            $pesanan = new Pesanan();
            $pesanan->fill($validated);
            $request->session()->put('pesanan', $pesanan);
            $pesanan = array([
                'id_pengguna'=>Auth::user()->id,
            ]);
            $request->session()->put('pesanan', $pesanan);
        }else{
            $pesanan = $request->session()->get('pesanan');
            $pesanan->fill($validated);
            $request->session()->put('pesanan', $pesanan);
            $pesanan = array([
                'id_pengguna'=>Auth::user()->id,
            ]);
            $request->session()->put('pesanan', $pesanan);
        }
    }

    public function index(){
        return view('pengguna.penggunadb');
    }

    public function poin() {
        return view("pengguna.poin");
    }


    //
}
