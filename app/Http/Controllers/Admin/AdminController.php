<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $admin = Auth::user();

        // dd($admin);
        return view('admin.admindb', ['admin'=>$admin]);
    }

    public function informasiSampah(){
        $informasi = DB::Table('informasi_sampahs')
                        ->orderBy('info_id')
                        ->paginate(5);

        return view('admin.overviewDInformasi', ['informasi' => $informasi]);
    }

    public function overviewPengguna()
    {
        // $pengguna = DB::table('users')
        //                     ->join('profils', 'profils.user_id','=','users.id')//Join sm profil
        //                     ->where('role_id','2')//Filter pengguna sj
        //                     ->get();

        $pengguna = User::where('role_id', 2)->get();

        return view('admin.overviewDPengguna', ['pengguna'=>$pengguna]);

    }
    public function dataRoles(){
        $roles = DB::Table('roles')
                        ->orderBy('id')
                        ->paginate(5);

        return view('admin.overviewDPengguna', ['roles' => $roles]);
    }
    public function create()
    {
        return view('informasi.nambahinformasi');
    }

    public function dataInformasiSampah(){
        $informasi = DB::Table('informasi_sampahs')
                        ->orderBy('info_id')
                        ->paginate(5);

        return view('informasi.nambahinformasi', ['informasi' => $informasi]);
    }
}
