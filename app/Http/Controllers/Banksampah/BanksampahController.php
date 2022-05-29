<?php

namespace App\Http\Controllers\Banksampah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BanksampahController extends Controller
{
    public function daftarpesananbanks() {
        return view("banksampah.daftarpesanan1");
    }
    //
}
