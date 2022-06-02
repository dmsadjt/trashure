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
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
});

Route::group(['as' => 'pengguna.', 'prefix' => 'pengguna', 'namespace' => 'Pengguna', 'middleware' => ['auth', 'pengguna']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as' => 'mitra.', 'prefix' => 'mitra', 'namespace' => 'Mitra', 'middleware' => ['auth', 'mitra']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as' => 'banksampah.', 'prefix' => 'banksampah', 'namespace' => 'Banksampah', 'middleware' => ['auth', 'banksampah']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
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




//route view dimas
Route::get('/profilbank', function(){
    return view('banksampah.profil');
});

Route::get('/driver-found', function(){
    return view('pengguna.driver_found');
});

Route::get('/admin/overview-informasi', 'Admin\AdminController@informasiSampah');

Route::get('/pilih-alamat', function(){
    return view('pengguna.pilih_alamat');
});



Route::get('/layout/layout','HomeController@index');

Route::get('dbmitra', 'Mitra\DashboardController@index');
Route::get('pengaturan', 'Pengguna\PengaturanController@pengaturan');
Route::get('daftarpesananbank', 'BankSampah\BankSampahController@daftarpesananbanks');
Route::get('daftarpesananpengguna', 'Pengguna\PenggunaController@daftarpesananpengguna');
Route::get('editprofile', 'Pengguna\PengaturanController@editprofile');

Route::get('nambahinformasi', 'Pengguna\InformasiController@nambahinformasi');


Route::get('overviewDPengguna', 'DBPenggunaController@overviewPengguna');

Route::get('welcome', 'WelcomeController@welcome');
