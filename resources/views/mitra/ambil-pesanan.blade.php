@extends('layouts.navbar-mitra')
@section('title','Detail Pesanan')
@section('content')
<div class="mx-5 mt-3 rounded-3 p-5 text-white text-center bg-dark-green">
    <h1>
        <b>
            Detail Pesanan
        </b>
    </h1>
</div>
<div class="mx-5 my-3 text-center">
    <h2>
        <b>
        Order Masuk
        </b>
    </h2>
</div>
<div class="row mx-5 p-4 shadow-lg bg-green rounded-2">
    <div class="col-8 p-4 bg-light-green me-auto">
        <table>
            <tr>
                <td><b>Nama Pelanggan</b></td>
                <td>idisan</td>
            </tr>
            <tr>
                <td><b>Jenis Sampah</b> </td>
                <td>idisan</td>
            </tr>
            <tr>
                <td><b>Nomor</b> </td>
                <td>idisan</td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td>idisan</td>
            </tr>
        </table>
    </div>
    <div class="col-3 p-4 ms-auto bg-light-green">
        <p>To : idisan</p>
    </div>
</div>
<div class="text-center">
    <button class="mt-5 shadow-lg btn btn-success">Ambil pesanan</button>
    <button class="mt-5 shadow-lg btn btn-danger">Batalkan pesanan</button>
</div>
@endsection
