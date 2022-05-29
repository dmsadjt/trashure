<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBPenggunaController extends Controller
{
    public function overviewPengguna(){
        return view('overviewDPengguna');
    }

    public function cobaa(){
        return view('coba');
    }


}

