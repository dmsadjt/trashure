<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenggunaController extends Controller
{
    public function daftarpesananpengguna() {
        return view("pengguna.daftarpesananpengguna");
    }


    //
}
