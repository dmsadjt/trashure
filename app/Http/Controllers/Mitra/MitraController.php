<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Pesanan;


class MitraController extends Controller
{
    public function index() {
        return view('mitra.mitradb');
    }

    public function daftarpesanan() {

        $pesanan = Pesanan::where('status_pesanan', 'Dalam pencarian driver')->get();
        $pesanan_ongoing = Pesanan::where('status_pesanan', 'Driver sedang menuju alamat')->get();
        $pesanan_finish = Pesanan::where('status_pesanan', 'Pesanan diantarkan menuju bank')->get();
        $pesanan_done = Pesanan::where('status_pesanan', 'Pesanan selesai')->get();

        return view('mitra.daftarpesananmitra', compact('pesanan','pesanan_ongoing','pesanan_finish','pesanan_done'));
    }

    public function terimaPesanan(Request $request){

        $user = auth()->user();

        DB::table('pesanans')->where('id', $request->id)
                ->update([
                    'id_mitra'=> $user->id,
                    'status_pesanan'=>'Driver sedang menuju alamat',
                ]);

        return redirect('/mitra/pesanan/daftarpesanan');
    }

    public function ambilPesanan(Request $request){

        $user = auth()->user();

        DB::table('pesanans')->where('id', $request->id)
                ->update([
                    'status_pesanan'=>'Pesanan diantarkan menuju bank',
                ]);

        $pesanan = Pesanan::where('id', $request->id)->get();
        return redirect('/mitra/pesanan/daftarpesanan');
    }

    public function selesaikanPesanan(Request $request){

        $user = auth()->user();

        DB::table('pesanans')->where('id', $request->id)
                ->update([
                    'status_pesanan'=>'Pesanan selesai',
                ]);

        $pesanan = Pesanan::where('id', $request->id)->get();
        return redirect('/mitra/pesanan/daftarpesanan');
    }

}

