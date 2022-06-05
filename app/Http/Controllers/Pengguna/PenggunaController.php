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
    public function pilihsampah() {
        return view("pesanan.pilihsampah");
    }

}
