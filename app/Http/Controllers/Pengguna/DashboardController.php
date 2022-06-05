<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function informasi() {
        return view('pengguna.informasi_welcome');
    }

    public function daftarInformasi() {
        return view('pengguna.list_informasi');
    }

    public function masukInformasi() {
        return view('informasi.organik');
    }
}
