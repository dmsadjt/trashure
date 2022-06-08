@extends('layouts.navbar-mitra')
@section('title', 'Ambil Pesanan')
@section('content')
    <div class="mx-5 mt-3 rounded-3 p-5 text-white text-center bg-dark-green">
        <h1>
            <b>
                Ambil Pesanan
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
    <div class="text-center">
        <a class="mt-5 shadow-lg btn btn-danger" href="/mitra/pesanan/daftarpesanan">Kembali</a>
        <button type="button" class="btn mt-5 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ambil Pesanan
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ambil Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin mengambil pesanan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <form action="/mitra/pesanan/ambilPesanan" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$pesanan->id}}">
                        <input type="submit" value="Iya" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
