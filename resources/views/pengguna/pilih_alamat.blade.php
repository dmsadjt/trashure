@extends('layouts.navbar-pengguna')
@section('text1', 'Pesan')
@section('text2', 'Informasi')
@section('content')
    <h1 class="text-center mt-5">Pilih Alamat Pemesanan</h1>
    <div class="peta-placeholder m-5">
        <img src="{{ url('/image/pengguna/peta-placeholder.png') }}" alt="">
    </div>
    <div class="alamat p-5 mb-3">
        <form action="/pengguna/pesan/postAlamat" method="POST">
            @csrf
            <div class="form-group">
                <label for="alamat_pengguna" class="form-label">Dimana Tempat Tinggalmu?</label>
                <input type="text" id="alamat_pengguna" name="alamat_pengguna" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="id_banks">Manakah Bank Sampah Tujuanmu?</label>
                <select class="form-select" name="id_banks" id="id_banks">
                    @foreach ($banks as $b)
                        <option value="{{$b->id}}">{{$b->profile->nama_bank}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2 text-center">
                <input type="submit" value="Lanjutkan" class="btn btn-primary mt-5">
            </div>
        </form>
    </div>


@endsection
