<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DBPenggunaController;

///Auth
Route::get('/', function () {
    if (Auth::check() && Auth::user()->role_id == 1) {
        return redirect('admin/dashboard');
    } elseif (Auth::check() && Auth::user()->role_id == 2) {
        return redirect('pengguna/dashboard');
    } elseif (Auth::check() && Auth::user()->role_id == 3) {
        return redirect('mitra/dashboard');
    } elseif (Auth::check() && Auth::user()->role_id == 4) {
        return redirect('banksampah/dashboard');
    } else {
        return redirect('welcome');
    }
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'AdminController@index');
});//Muhammad Dimas Adijanto - 5026201138

Route::group(['as' => 'pengguna.', 'prefix' => 'pengguna', 'namespace' => 'Pengguna', 'middleware' => ['auth', 'pengguna']], function () {
    Route::get('dashboard', 'PenggunaController@index');
});

Route::group(['as' => 'mitra.', 'prefix' => 'mitra', 'namespace' => 'Mitra', 'middleware' => ['auth', 'mitra']], function () {
    Route::get('dashboard', 'DashboardController@index');
});

Route::group(['as' => 'banksampah.', 'prefix' => 'banksampah', 'namespace' => 'Banksampah', 'middleware' => ['auth', 'banksampah']], function () {
    Route::get('dashboard', 'DashboardController@index');
});

Auth::routes();
//route view dataPenggunaRuben
Route::get('/overviewdata', 'Admin\AdminController@dataPengguna');
//route tambah data pengguna
Route::get('/adddatapengguna', 'DBPenggunaController@tambahData');
//route store data pengguna ke DB
Route::post('/store','DBPenggunaController@store');
//route edit data pengguna
Route::get('/editdatapengguna/{id}', 'DBPenggunaController@edit');
//route hapus data pengguna
Route::get('/hapusdatapengguna/{id}','DBPenggunaController@hapus');

// //route view dataPenggunaRaffi
// Route::get('/overview-informasi', 'Informasi\DBInformasiController@overviewInformasi');
//route store data pengguna ke DB
Route::post('/store','DBInformasiController@store');
//route tambah data informasi
Route::get('/adddatainformasi', 'DBInformasiController@tambahData');



//route view dimas
Route::get('/pengguna/pesanan/driver-found', function(){
    return view('pengguna.driver_found');
});
Route::get('/pilih-alamat', function(){
    return view('pengguna.pilih_alamat');
});



Route::get('/layout/layout','HomeController@index');
Route::get('dbmitra', 'Mitra\DashboardController@index');

//route view Ega

//Pengguna
Route::get('pengaturan', 'Pengguna\PengaturanController@pengaturan');
Route::get('daftarpesananpengguna', 'Pengguna\PenggunaController@daftarpesananpengguna');
Route::get('pengaturan', 'Pengguna\PengaturanController@pengaturan');
Route::get('daftarpesananpengguna', 'Pengguna\PenggunaController@daftarpesananpengguna');
Route::get('pesananpengguna', 'Pengguna\PenggunaController@pesanpengguna');
Route::get('pilihsampah', 'Pengguna\PenggunaController@pilihsampahh');
//Route::get('editprofile', 'Pengguna\PengaturanController@editprofile');

Route::get('nambahinformasi', 'Informasi\InformasiController@nambahinformasi');
Route::get('pembayaran', 'Pesanan\PesananController@pembayaran');
Route::get('poin', 'Pengguna\PoinController@poin');
Route::get('overviewDPengguna', 'DBPenggunaController@overviewPengguna');




//Mitra
Route::get('dbmitra', 'Mitra\DashboardController@index');
Route::get('/mitra/pesanan/terima/id', function(){
    return view('mitra.detail-pesanan');
});

Route::get('/mitra/pesanan/ambil/id', function(){
    return view('mitra.ambil-pesanan');
});

//Bank Sampah
Route::get('daftarpesananbank', 'BankSampah\BankSampahController@daftarpesananbanks');
Route::get('/banksampah/profilbank', 'Banksampah\BanksampahController@profil'); //Muhammad Dimas Adijanto - 5026201138


//Pesanan
Route::get('pembayaran', 'Pesanan\PesananController@pembayaran');
Route::get('invoice', 'Pesanan\InvoiceController@invoice');


//Informasi Sampah
Route::get('/admin/overview-informasi', 'Admin\AdminController@informasiSampah'); //Muhammad Dimas Adijanto - 5026201138
Route::get('/informasi', 'Pengguna\DashboardController@informasi');
Route::get('/informasi/list', 'Pengguna\DashboardController@daftarInformasi');
Route::get('/informasi/list/{id}', 'Pengguna\DashboardController@masukInformasi'); //sdh konek database
Route::get('/informasi/list/organik', 'Pengguna\DashboardController@masukInformasi');
Route::get('/informasi/nambahinformasi', 'Informasi\InformasiController@nambahinformasi');



//Admin




//other
Route::get('/layout/layout','HomeController@index');
Route::get('editprofile', 'Pengguna\PengaturanController@editprofile');
Route::get('editprofile', 'Pengguna\PengaturanController@editprofile');
Route::get('welcome', 'WelcomeController@welcome');



