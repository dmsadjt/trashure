<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('mitra.mitradb');
    }
}
