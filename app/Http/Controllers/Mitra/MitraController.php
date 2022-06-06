<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MitraController extends Controller
{
    public function index() {
        return view('mitra.mitradb');
    }

    public function daftarpesanan() {
        return view('mitra.daftarpesananmitra');
    }
}
