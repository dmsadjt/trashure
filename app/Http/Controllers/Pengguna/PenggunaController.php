<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenggunaController extends Controller
{
    public function daftarpesananpengguna() {
        return view("pengguna.daftarpesananpengguna");
    }

    public function pesanpengguna() {
        return view("pesanan.halamanpesanan");
    }

    public function pilihAlamat(){
        return view('pengguna.pilih_alamat');
    }

    public function pilihsampahh() {
        return view("pesanan.pilihsampah");
    }

    public function index(){
        return view('pengguna.penggunadb');
    }

    public function poin() {
        return view("pengguna.poin");
    }


    //
}
