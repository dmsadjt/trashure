@extends('layouts.layout')
@section('content')
    <h1 class="text-center mt-5">Pilih Alamat Pemesanan</h1>
    <div class="peta-placeholder m-5">
        <img src="{{ url('/image/pengguna/peta-placeholder.png') }}" alt="">
    </div>
    <div class="alamat p-5">
        <form action="post">
            <div class="form-group">
                <label for="alamat" class="form-label">Dimana Tempat Tinggalmu?</label>
                <input type="text" id="alamat" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="bank-sampah">Manakah Bank Sampah Tujuanmu?</label>
                <input type="text" id="bank-sampah" class="form-control">
            </div>
        </form>
    </div>
    <div class="m-3 text-center">
        <input type="submit" class="btn btn-primary mt-5">
    </div>

@endsection
