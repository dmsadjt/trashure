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

    public function overviewMitra(){
        return view('admin.overviewDMitra');
    }
    public function tambahDataMitra()
    {
        return view('admin.addoverviewDMitra');
    }

    public function storeMitra(Request $request)
    {
        // insert data ke table pengguna
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => $request->name,
            // 'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $last_child = DB::table('users')->orderBy('id','desc')->first();

        DB::table('profils')->insert([
            'user_id'=>$last_child->id,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'no_rekening' => $request->no_rekening,
            'kendaraan' => $request->kendaraan,
            'plat_kendaraan' => $request->plat_kendaraan,

        ]);

        // alihkan halaman ke halaman pengguna
        return redirect('/admin/mitra/overviewdata');

    }
    public function hapusMitra($id)
    {
        // menghapus data pengguna berdasarkan id yang dipilih
        DB::table('users')->where('id', $id)->delete();
        DB::table('profils')->where('user_id',$id)->delete();

        // alihkan halaman ke halaman pengguna
        return redirect('admin/mitra/overviewdata');
    }
    public function editMitra($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $users = User::where('id',$id)->get();
        // passing data pendapatan yang didapat ke view edit.blade.php
        return view('admin.editoverviewDMitra',['users' => $users]);

    }

    public function updateMitra(Request $request)
    {

        DB::table('users')->where('id', $request->id)->update([
            'role_id' => $request->nama,
            'name' => $request->jabatan,
            'email' => $request->umur,
            'password' => $request->alamat
        ]);
        DB::table('profils')->where('user_id', $request->user_id)->update([
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'no_rekening' => $request->no_rekening,
            'kendaraan' => $request->kendaraan,
            'plat_kendaraan' => $request->plat_kendaraan,
        ]);

        return redirect('/admin/mitra/overviewdata');
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




