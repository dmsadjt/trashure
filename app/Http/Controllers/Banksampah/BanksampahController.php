<?php

namespace App\Http\Controllers\Banksampah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class BanksampahController extends Controller
{
    public function index(){
        return view('banksampah.banksdb');
    }

    public function daftarpesananbanks() {
        return view("banksampah.daftarpesanan1");
    }

    public function profil(){
        $banks = Auth::user();
        return view("banksampah.profil", ['banks'=>$banks]);
    }
    //

    public function overviewData(){
        $banks = User::where('role_id', 4)->get();
        return view('admin.overviewDBankSampah', ['banks'=>$banks]);

    }

    public function storeStatus(Request $request) {
        $user = auth()->user();

        DB::table('profils')->where('user_id', $request->id)
                ->update([
                    'status_bank' => $request->status_bank,
                ]);

                return redirect('/banksampah/profilbank');
    }

    public function statusBank() {
        $status = DB::table('status')->first();


        return view('banksampah.statusbank', compact('status'));
    }


}
