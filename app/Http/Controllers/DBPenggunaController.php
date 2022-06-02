<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(Request $request)
    {
        // insert data ke table pengguna
        DB::table('users')->insert([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password,
            'no_telepon' => $request->no_telepon,
            'no_rekening' => $request->no_rekening,

        ]);
        // alihkan halaman ke halaman pengguna
        return redirect('/overviewdata');
    }

    public function edit($id)
{
	// mengambil data berdasarkan id yang dipilih
	$users = DB::table('users')->where('id',$id)->get();
	// passing data pendapatan yang didapat ke view edit.blade.php
	return view('admin.editoverviewDPengguna',['users' => $users]);

}
}
