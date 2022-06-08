<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function daftarpesananpengguna() {
        $pesanan = Pesanan::where('id_pengguna',auth()->user()->id)->get();

        $join = DB::table('pesanans')
                        ->join('users','users.id','=','pesanans.id_banks')
                        ->get();

        $join_mitra = DB::table('pesanans')
                        ->join('users','users.id','=','pesanans.id_mitra')
                        ->join('profils','profils.user_id','=','pesanans.id_mitra')
                        ->get();



        return view("pengguna.daftarpesananpengguna", compact('join','join_mitra'));
    }

    public function pesanpengguna() {
        return view("pesanan.halamanpesanan");
    }

    public function pilihAlamat(Request $request){
        $pesanan = $request->session()->get('pesanan');
        $banks = User::where('role_id',4)->get();

        return view('pengguna.pilih_alamat',compact('pesanan','banks'));
    }

    public function pilihsampahh(Request $request) {
        $pesanan = $request->session()->get('pesanan');

        return view("pesanan.pilihsampah",compact('pesanan'));
    }

    public function postSampah(Request $request){


        $validated = $request->validate([
            'jenis_sampah' => '',
            'volume' => '',
        ]);
        $auth = (['id_pengguna'=>auth()->user()->id]);
        $auth_validated = array_merge($validated, $auth);

        if(empty($request->session()->get('pesanan'))){
            $pesanan = new Pesanan();
            $pesanan->fill($auth_validated);
            $request->session()->put('pesanan', $pesanan);
        }else{
            $pesanan = $request->session()->get('pesanan');
            $pesanan->fill($auth_validated);
            $request->session()->put('pesanan', $pesanan);
        }

        return redirect('/pengguna/pesan/pilih-alamat');
    }

    public function postAlamat(Request $request){
        $validated = $request->validate([
            'alamat_pengguna'=>'',
            'id_banks'=>'',
        ]);

        if(empty($request->session()->get('pesanan'))){
            $pesanan = new Pesanan();
            $pesanan->fill($validated);
            $request->session()->put('pesanan', $pesanan);
        }else{
            $pesanan = $request->session()->get('pesanan');
            $pesanan->fill($validated);
            $request->session()->put('pesanan', $pesanan);
        }

        return redirect('/pengguna/pesan/pembayaran');
    }

    public function pembayaran(Request $request) {
        $pesanan = $request->session()->get('pesanan');
        $user = auth()->user();
        $opsi = DB::table('pembayaran')->get();
        return view("pesanan.pembayaran", compact('pesanan','user','opsi'));
    }

    public function postPembayaran(Request $request) {

        $validated = $request->validate([
            'opsi_pembayaran'=>'',
        ]);

        if(empty($request->session()->get('pesanan'))){
            $pesanan = new Pesanan();
            $pesanan->fill($validated);
            $request->session()->put('pesanan', $pesanan);
        }else{
            $pesanan = $request->session()->get('pesanan');
            $pesanan->fill($validated);
            $request->session()->put('pesanan', $pesanan);
        }

        return redirect('/pengguna/pesan/invoice');
    }

    public function invoice(Request $request) {
        $pesanan = $request->session()->get('pesanan');
        $banks = User::where('id', $pesanan->id_banks)->first();
        $pay = DB::table('pembayaran')->where('pembayaran_id',$pesanan->opsi_pembayaran)->first();
        return view("pesanan.invoice", compact('pesanan','banks','pay'));
    }

    public function postPesanan(Request $request){
        $pesanan = $request->session()->get('pesanan');
        $pesanan->save();

        return redirect('/pengguna/daftarpesananpengguna');
    }

    public function index(){
        return view('pengguna.penggunadb');
    }

    public function poin() {
        $users = auth()->user();

        return view("pengguna.poin", compact('users'));
    }


    //
}
