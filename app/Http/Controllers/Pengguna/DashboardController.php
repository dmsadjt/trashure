<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function informasi() {
        return view('pengguna.informasi_welcome');
    }

    public function daftarInformasi() {
        $informasi = DB::table('informasi_sampahs')->get();
        return view('pengguna.list_informasi', ['informasi'=>$informasi]);
    }

    public function masukInformasi($id) {
        $informasi = DB::table('informasi_sampahs')->where('info_id', $id)->get();
        return view('informasi.organik',['informasi'=>$informasi]);
    }
}
