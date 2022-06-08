@extends('layouts.navbar-admin')
@section('title', 'TambahDataBankSampah')
@section('content')
    <h1 class="mt-1 mx-5 py-3 px-5 mb-1 text-center">Tambah Data Bank Sampah</h1>
    <div class="mx-5 px-5 row ">
        <div class="col-6 border mx-auto">

            <form class="form my-3" action="/admin/banksampah/updateData" method="POST">
                @csrf
                @foreach ($banks as $b)
                    <input type="hidden" name="id" id="id" value="{{$b->id}}">
                    <input type="hidden" value="4" name="role_id" id="role_id">
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ $b->email }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password"
                            value="{{ $b->password }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $b->name }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input class="form-control" type="alamat" name="alamat" id="alamat" value="{{ $b->profile->alamat }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="no_rekening">Nomor Rekening</label>
                        <input class="form-control" type="text" name="no_rekening" id="no_rekening"
                            value="{{ $b->profile->no_rekening }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="no_telepon">Nomor Telepon</label>
                        <input class="form-control" type="text" name="no_telepon" id="no_telepon"
                            value="{{ $b->profile->no_telepon }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nama_bank">Nama Bank</label>
                        <input class="form-control" type="text" name="nama_bank" id="nama_bank"
                            value="{{ $b->profile->nama_bank }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="status_bank">Status Bank</label>
                        <select class="form-select" name="status_bank" id="status_bank" required>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-success my-2" value="Update Data Bank Sampah">
                @endforeach

            </form>
        </div>
    </div>

@endsection
