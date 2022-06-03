<?php

namespace App\Http\Controllers\Pesanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function invoice() {
        return view("pesanan.invoice");
    }

}
