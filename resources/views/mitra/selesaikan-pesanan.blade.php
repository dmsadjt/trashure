@extends('layouts.navbar-mitra')
@section('title', 'Selesaikan Pesanan')
@section('content')
    <div class="mx-5 mt-3 rounded-3 p-5 text-white text-center bg-dark-green">
        <h1>
            <b>
                Selesaikan Pesanan
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
                    <td>{{ $pengguna->name }}</td>
                </tr>
                <tr>
                    <td><b>Jenis Sampah</b> </td>
                    <td>{{ $pesanan->jenis_sampah }}</td>
                </tr>
                <tr>
                    <td><b>Nomor</b> </td>
                    <td>{{ $pengguna->profile->no_telepon }}</td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>{{ $pesanan->alamat_pengguna }}</td>
                </tr>
            </table>
        </div>
        <div class="col-3 p-4 ms-auto bg-light-green">
            <p>Menuju : </p>
            <p>{{ $banks->profile->alamat }}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center text-center">

        <form action="/mitra/pesanan/selesaikanPesanan" method="POST" enctype="multipart/form-data"\>
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $pesanan->id }}">
            <input type="hidden" name="status_pesanan" id="status_pesanan" value="Pesanan selesai">
            <div class="form-group mt-2">
                <label for="bukti_selesai">Upload Bukti Penyelesaian Pesanan</label>
                <input class="form-control " type="file" name="bukti_selesai" id="bukti_selesai">
            </div>
            <a class="mt-5 shadow-lg btn btn-danger" href="/mitra/pesanan/daftarpesanan">Kembali</a>
            <input type="submit" value="Selesaikan Pesanan" class="btn btn-primary mt-5">
        </form>


    </div>
    </div>
@endsection
