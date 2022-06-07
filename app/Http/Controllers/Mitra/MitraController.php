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

    public function detailPesanan($id){
        $pesanan = Pesanan::where('id',$id)->first();

        $banks = User::where('id',$pesanan->id_banks)->first();

        $pengguna = User::where('id',$pesanan->id_pengguna)->first();


        return view('mitra.detail-pesanan',compact('pesanan','banks','pengguna'));
    }

    public function detailAmbilPesanan($id){
        $pesanan = Pesanan::where('id',$id)->first();

        $banks = User::where('id',$pesanan->id_banks)->first();

        $pengguna = User::where('id',$pesanan->id_pengguna)->first();


        return view('mitra.ambil-pesanan',compact('pesanan','banks','pengguna'));
    }

    public function detailSelesaikanPesanan($id){
        $pesanan = Pesanan::where('id',$id)->first();

        $banks = User::where('id',$pesanan->id_banks)->first();

        $pengguna = User::where('id',$pesanan->id_pengguna)->first();


        return view('mitra.selesaikan-pesanan',compact('pesanan','banks','pengguna'));
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


        if ($files = $request->file('bukti_selesai')) {
                // Define upload path
                $destinationPath = public_path('/bukti_selesai/'); // upload path
                // Upload Orginal Image
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $insert['image'] = "$profileImage";

                DB::table('pesanans')->where('id', $request->id)
                ->update([
                    'status_pesanan'=>'Pesanan selesai',
                    'bukti_selesai'=>"$profileImage",
                ]);

        }

        $pesanan = Pesanan::where('id', $request->id)->get();

        return redirect('/mitra/pesanan/daftarpesanan');
    }

}

