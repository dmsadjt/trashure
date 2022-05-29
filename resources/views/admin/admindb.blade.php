@extends('layouts.navbar-admin')
@section('content')
    <div class="row text-center m-4">
        <h1>Welcome back, {{$admin->name}}!</h1>
    </div>
    <div class="container main">

        <div class="row text-center">
            <div class="col">
                <div class="row">
                    <a class="btn main-btn">Anggota</a>
                </div>
                <div class="row">
                    <a class="btn main-btn">Mitra</a>

                </div>
            </div>
            <div class="col">
                <div class="row">
                    <a class="btn main-btn">Bank Sampah</a>
                </div>
                <div class="row">
                    <a class="btn main-btn" href="/admin/overview-informasi">Informasi Sampah</a>
                </div>
            </div>
        </div>

    </div>
@endsection
