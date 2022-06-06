<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class DBPenggunaController extends Controller
{
    public function overviewPengguna()
    {
        return view('admin.overviewDPengguna');
    }

    public function tambahData()
    {
        // memanggil view tambah
        return view('admin.addoverviewDPengguna');
    }

    public function storePengguna(Request $request)
    {
        // insert data ke table pengguna
        DB::table('users')->insert([
            'role_id' => '2',
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
        ]);

        // alihkan halaman ke halaman pengguna
        return redirect('/admin/pengguna/overviewdata');
    }



    public function edit($id)
{
	// mengambil data berdasarkan id yang dipilih
    $users = User::where('id',$id)->get();
	// passing data pendapatan yang didapat ke view edit.blade.php
	return view('admin.editoverviewDPengguna',['users' => $users]);

}
public function hapus($id)
    {
        // menghapus data pengguna berdasarkan id yang dipilih
        DB::table('users')->where('id', $id)->delete();
        DB::table('profils')->where('user_id',$id)->delete();

        // alihkan halaman ke halaman pengguna
        return redirect('admin/pengguna/overviewdata');
    }
}

// CONTROLLER ADMIN

