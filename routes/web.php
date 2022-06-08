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
use App\Http\Controllers\Mitra\DBMitraController;

//Auth
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
    Route::get('dashboard', 'MitraController@index');
});

Route::group(['as' => 'banksampah.', 'prefix' => 'banksampah', 'namespace' => 'Banksampah', 'middleware' => ['auth', 'banksampah']], function () {
    Route::get('dashboard', 'BanksampahController@index')->name('banksampahdashboard');
});

Auth::routes();

//Admin CRUD Pengguna, Mitra, Bank Sampah, dan Informasi
Route::get('/admin/pengguna/overviewdata', 'Admin\AdminController@overviewPengguna');
Route::get('/admin/pengguna/adddatapengguna', 'DBPenggunaController@tambahData');
Route::get('/admin/pengguna/editdatapengguna/{id}', 'DBPenggunaController@edit');
Route::get('/admin/pengguna/hapusdatapengguna/{id}','DBPenggunaController@hapus');
Route::post('/admin/pengguna/storePengguna','DBPenggunaController@storePengguna');


Route::post('/admin/informasi/store','DBInformasiController@store');
Route::get('/admin/informasi/adddatainformasi', 'DBInformasiController@tambahData');
Route::get('/admin/informasi/nambahinformasi', 'Informasi\InformasiController@nambahinformasi');
Route::get('/admin/informasi/overview-informasi', 'Admin\AdminController@informasiSampah'); //Muhammad Dimas Adijanto - 5026201138

Route::get('/admin/banksampah/tampilkan', 'Banksampah\BanksampahController@tampilkan');//Muhammad Dimas Adijanto - 5026201138
Route::get('/admin/banksampah/tambahData', 'Banksampah\BanksampahController@tambahData');//Muhammad Dimas Adijanto - 5026201138
Route::get('/admin/banksampah/editData/{id}', 'Banksampah\BanksampahController@editData');//Muhammad Dimas Adijanto - 5026201138
Route::get('/admin/banksampah/hapusData/{id}', 'Banksampah\BanksampahController@hapusData');//Muhammad Dimas Adijanto - 5026201138
Route::post('/admin/banksampah/postDataBankSampah', 'Banksampah\BanksampahController@postDataBankSampah');//Muhammad Dimas Adijanto - 5026201138
Route::post('/admin/banksampah/updateData', 'Banksampah\BanksampahController@updateData');//Muhammad Dimas Adijanto - 5026201138


Route::get('/admin/mitra/overviewdata',  'Admin\AdminController@overviewMitra');
Route::get('/admin/mitra/adddatamitra', 'Mitra\MitraController@tambahDataMitra');
Route::post('/admin/mitra/storeMitra', 'Mitra\MitraCOntroller@storeMitra');
Route::get('/admin/mitra/hapusdatamitra/{id}', 'Mitra\MitraController@hapusMitra');
Route::get('/admin/mitra/editdatamitra/{id}', 'Mitra\MitraController@editMitra');
Route::post('/admin/mitra/updatedatamitra', 'Mitra\MitraController@updateMitra');

//Pengguna
Route::get('/pengguna/pengaturan', 'Pengguna\PengaturanController@pengaturan');
Route::get('/pengguna/daftarpesananpengguna', 'Pengguna\PenggunaController@daftarpesananpengguna');
Route::get('/pengguna/pesananpengguna', 'Pengguna\PenggunaController@pesanpengguna');
Route::get('/pengguna/poin', 'Pengguna\PoinController@poin');
Route::get('/pengguna/pesan/pilihsampah', 'Pengguna\PenggunaController@pilihsampahh');
Route::post('/pengguna/pesan/postsampah', 'Pengguna\PenggunaController@postSampah'); //Muhammad Dimas Adijanto - 5026201138
Route::get('/pengguna/pesan/pembayaran', 'Pengguna\PenggunaController@pembayaran');
Route::get('/pengguna/pesan/invoice', 'Pengguna\PenggunaController@invoice');
Route::get('/pengguna/informasi', 'Pengguna\DashboardController@informasi');
Route::get('/pengguna/informasi/list', 'Pengguna\DashboardController@daftarInformasi');
Route::get('/pengguna/informasi/list/{id}', 'Pengguna\DashboardController@masukInformasi'); //sdh konek database
Route::get('/pengguna/informasi/list/organik', 'Pengguna\DashboardController@masukInformasi');
Route::get('/pengguna/pesan/pilih-alamat', 'Pengguna\PenggunaController@pilihAlamat'); //Muhammad Dimas Adijanto - 5026201138
Route::post('/pengguna/pesan/postAlamat', 'Pengguna\PenggunaController@postAlamat'); //Muhammad Dimas Adijanto - 5026201138
Route::post('/pengguna/pesan/postPembayaran', 'Pengguna\PenggunaController@postPembayaran'); //Muhammad Dimas Adijanto - 5026201138
Route::post('/pengguna/pesan/postPesanan', 'Pengguna\PenggunaController@postPesanan'); //Muhammad Dimas Adijanto - 5026201138


//Mitra
Route::get('/mitra/pesanan/terima/id', 'Pesanan\PesananController@detailPesanan');//Muhammad Dimas Adijanto - 5026201138
Route::get('/mitra/pesanan/ambil/id', 'Pesanan\PesananController@ambilPesanan'); //Muhammad Dimas Adijanto - 5026201138
Route::get('/mitra/pesanan/selesaikan/id', 'Pesanan\PesananController@selesaikanPesanan'); //Muhammad Dimas Adijanto - 5026201138
Route::get('/mitra/pesanan/daftarpesanan', 'Mitra\MitraController@daftarpesanan');
Route::get('/mitra/pesanan/detailpesanan/{id}', 'Mitra\MitraController@detailPesanan');
Route::get('/mitra/pesanan/detailAmbilPesanan/{id}', 'Mitra\MitraController@detailAmbilPesanan');
Route::get('/mitra/pesanan/detailSelesaikanPesanan/{id}', 'Mitra\MitraController@detailSelesaikanPesanan');

Route::post('/mitra/pesanan/terimaPesanan', 'Mitra\MitraController@terimaPesanan');//Muhammad Dimas Adijato - 5026201138
Route::post('/mitra/pesanan/ambilPesanan', 'Mitra\MitraController@ambilPesanan');//Muhammad Dimas Adijato - 5026201138
Route::post('/mitra/pesanan/selesaikanPesanan', 'Mitra\MitraController@selesaikanPesanan');//Muhammad Dimas Adijato - 5026201138

//Bank Sampah
Route::get('/banksampah/daftarpesananbank', 'BankSampah\BankSampahController@daftarpesananbanks');
Route::get('/banksampah/profilbank', 'Banksampah\BanksampahController@profil'); //Muhammad Dimas Adijanto - 5026201138
Route::get('/banksampah/statusbank', 'BankSampah\BankSampahController@statusBank');
Route::post('/banksampah/ubahstatus', 'Banksampah\BanksampahController@storeStatus');
Route::post('/banksampah/navbar', 'Banksampah\BanksampahController@navbar');



//other
Route::get('/layout/layout','HomeController@index');
Route::get('editprofile', 'Pengguna\PengaturanController@editprofile');
Route::get('editprofile', 'Pengguna\PengaturanController@editprofile');
Route::get('welcome', 'WelcomeController@welcome');
Route::get('/pengguna/pesanan/driver-found', function(){
    return view('pengguna.driver_found');
});
