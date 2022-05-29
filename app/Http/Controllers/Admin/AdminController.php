<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $admin = Auth::user();

        // dd($admin);
        return view('admin.admindb',['admin'=>$admin]);
    }

    public function informasiSampah(){
        $informasi = DB::Table('informasi_sampahs')
                        ->orderBy('info_id')
                        ->paginate(5);

        return view('admin.overviewDInformasi', ['informasi' => $informasi]);
    }
}
