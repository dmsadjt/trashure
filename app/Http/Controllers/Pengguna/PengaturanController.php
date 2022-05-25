<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengaturanController extends Controller
{
    public function pengaturan(){
        return view('pengguna.pengaturan');
    }
    //
}
