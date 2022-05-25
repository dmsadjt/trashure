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
        return redirect('login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
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


Route::get('/layout/layout','HomeController@index');

Route::get('dbmitra', 'Mitra\DashboardController@index');
Route::get('pengaturan', 'Pengguna\PengaturanController@pengaturan');
Route::get('daftarpesanan1', 'BankSampah\BankSampahController@daftarpesanan1');


