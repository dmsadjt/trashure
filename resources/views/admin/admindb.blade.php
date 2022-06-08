@extends('layouts.navbar-admin')
@section('content')
    <div class="row text-center m-4">
        <h1>Welcome back, {{$admin->name}}!</h1>
    </div>
    <div class="container main">

        <div class="row text-center">
            <div class="col">
                <div class="row">
                    <a class="btn main-btn" href="/admin/pengguna/overviewdata">Pengguna</a>
                </div>
                <div class="row">
                    <a class="btn main-btn" href="/admin/mitra/overviewdata">Mitra</a>

                </div>
            </div>
            <div class="col">
                <div class="row">
                    <a class="btn main-btn" href="/admin/banksampah/tampilkan">Bank Sampah</a>
                </div>
                <div class="row">
                    <a class="btn main-btn" href="/admin/informasi/overview-informasi">Informasi Sampah</a>
                </div>
            </div>
        </div>

    </div>
@endsection
