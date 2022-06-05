@extends('layouts.navbarBanks')
@section('title', 'Profil Bank Sampah')
@section('content')
    <div class="row content--notification">
        <div class="col content--notification_image">
            <img src="{{ url('/image/banksampah/image_banksampah.png') }}" alt="bank_sampah" class="image--banksampah">
        </div>
        <div class="col-10">
            <h1>
                {{$banks->profile->nama_bank}}
            </h1>
        </div>
    </div>
    <div class="row content--menus">
        <div class="col content--menu_left">
            <div class="row">
                <div class="row">
                    <img src="{{ url('/image/banksampah/status_bank.png') }}" class="img-thumbnail image--banksampah" alt="">
                </div>
                <div class="row">
                    <b class="text-center">Status</b>
                </div>
            </div>
            <div class="row">
                <span class="status-bank">{{$banks->profile->status_bank}}</span>
            </div>
        </div>
        <div class="col content--menu_right">
            <div class="row">
                <div class="d-grid gap-3 m-5">
                    <button class="btn btn-success" type="button">Active</button>
                    <button class="btn btn-danger" type="button">Inactive</button>
                </div>
            </div>
            <div class="row">
                <b class="text-center">Change Status</b>
            </div>
        </div>
    </div>
@endsection
