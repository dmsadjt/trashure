<?php

namespace App\Http\Controllers\Banksampah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pesanan;

class BanksampahController extends Controller
{
    public function index(){
        $banks = auth()->user();

        return view('banksampah.banksdb',compact('banks'));
    }


    public function daftarpesananbanks()
    {
        $banks= auth()->user();
        $pesanan = Pesanan::where('id_banks', $banks->id)->get();
        // $mitra_nama = array();
        // $mitra_plat = array();
        // $mitra_kendaraan = array();
        // foreach($pesanan as $p){
        //     $user = User::where('id',$p->id_mitra)->first();
        //     array_push($mitra_nama, $user->name);
        //     array_push($mitra_plat, $user->profile->plat_kendaraan);
        //     array_push($mitra_kendaraan, $user->profile->kendaraan);
        // }
        // dd($mitra_kendaraan);
        return view("banksampah.daftarpesanan1", compact('banks','pesanan'));
    }

    public function navbar(){
        $banks= auth()->user();
        return view('layouts.navbarBanks', compact('banks'));
    }
    //

    public function tampilkan()
    {
        $banks = User::where('role_id', 4)->get();
        return view('admin.overviewDBankSampah', ['banks' => $banks]);
    }

    public function tambahData()
    {
        return view('admin.tambahDataBankSampah');
    }

    public function postDataBankSampah(Request $request)
    {

        // insert data ke table users
        DB::table('users')->insert([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);

        //ambil row terakhir dari table users
        $last_child = DB::table('users')->orderBy('id', 'desc')->first();

        // insert data ke table profil menggunakan data dr request dan last_child
        DB::table('profils')->insert([
            'user_id' => $last_child->id,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'no_rekening' => $request->no_rekening,
            'nama_bank' => $request->nama_bank,
            'status_bank' => $request->status_bank,
        ]);

        return redirect('/admin/banksampah/tampilkan');
    }


    public function hapusData($id)
    {
        DB::table('profils')->where('user_id',$id)->delete();
        DB::table('users')->where('id', $id)->delete();

        return redirect('/admin/banksampah/tampilkan');
    }


    public function editData($id)
    {
        $banks = User::where('id', $id)->get();

        return view('admin.editDataBankSampah', compact('banks'));
    }

    public function updateData(Request $request)
    {
        DB::table('users')->where('id', $request->id)
            ->update([
                'role_id' => $request->role_id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

        DB::table('profils')->where('user_id', $request->id)
            ->update([
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'no_rekening' => $request->no_rekening,
                'nama_bank' => $request->nama_bank,
                'status_bank' => $request->status_bank,
            ]);

        return redirect('/admin/banksampah/tampilkan');
    }

    public function storeStatus(Request $request) {
        $user = auth()->user();

        DB::table('profils')->where('user_id', $request->id)
                ->update([
                    'status_bank' => $request->status_bank,
                ]);

                return redirect('/');
    }

}
