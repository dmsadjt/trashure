<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;


class MitraController extends Controller
{
    public function index() {
        return view('mitra.mitradb');
    }

    public function daftarpesanan() {
        return view('mitra.daftarpesananmitra');
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
            // 'no_telepon' => $request->no_telepon,
            // 'no_rekening' => $request->no_rekening,
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

}




