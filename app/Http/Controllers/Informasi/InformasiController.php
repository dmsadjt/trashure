<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function nambahinformasi() {
        return view("informasi.nambahinformasi");
    }

}
