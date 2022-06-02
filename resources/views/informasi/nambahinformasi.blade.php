@extends('layouts.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')



<div class="container">
    <div class="row justify-content-center" style="margin-top: 3em" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Informasi</div>

                <div class="card-body">
                    <form method="POST" action="/mahasiswa">
                        @csrf

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10">{{ old('addres') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
