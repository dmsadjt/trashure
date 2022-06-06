<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class MitraController extends Controller
{
    public function index() {
        return view('mitra.mitradb');
    }

    public function daftarpesanan() {
        return view('mitra.daftarpesananmitra');
    }
}

