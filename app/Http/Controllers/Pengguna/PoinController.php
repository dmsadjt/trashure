<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoinController extends Controller
{
    public function poin() {
        return view("pengguna.poin");
    }

}
