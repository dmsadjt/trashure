@extends('layouts.navbarBanks')
@section('title','Profil Bank Sampah')
@section('content')
<div class="row content--notification">
    <div class="col content--notification_image">
        <img src="{{url('/image/banksampah/image_banksampah.png')}}" alt="bank_sampah" class="image--banksampah">
    </div>
    <div class="col-10">
        <h1>
            WASTE BANK VRINDAVAN
        </h1>
    </div>
</div>
<div class="row content--menus">
    <div class="col content--menu_left">
        <div class="row">
            <div class="image--placeholder">

            </div>
        </div>
        <div class="row">

        </div>
    </div>
    <div class="col content--menu_right">
        <div class="row">
            <div class="image--placeholder"></div>
        </div>
        <div class="row"></div>
    </div>
</div>
@endsection
