<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBInformasiController extends Controller
{
    public function overviewInformasi()
    {
        return view('admin.overviewDInformasi');
    }

    public function tambahData()
    {
        // memanggil view tambah
        return view('informasi.nambahinformasi');
    }

    public function store(Request $request)
    {
        // insert data ke table pengguna
        DB::table('informasi_sampahs')->insert([
            'info_id' => $request->info_id,
            'judul' => $request->judul,
            'informasi' => $request->informasi,
            'gambar' => $request->gambar,

        ]);
        // alihkan halaman ke halaman pengguna
        return redirect('/overviewdatainformasi');
    }

}
