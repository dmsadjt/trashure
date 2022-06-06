<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

// CONTROLLER DB MITRA

class DBMitraController extends Controller {
    public function overviewMitra(){
        return view('admin.overviewDMitra');
    }
    public function tambahDataMitra()
    {
        // memanggil view tambah
        return view('admin.addoverviewDMitra');
    }
}

