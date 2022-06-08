@extends('layouts.navbarBanks')
@section('title','Dashboard')
@section('content')

<style>
    .content--bank_image{
        width: 158px;
        height: 160px;
    }
</style>

    <div class="row content--notification align-items-center">
        <div class="col-2 content--notification_image">
            <img src="{{url('/image/banksampah/image_banksampah.png')}}" alt="">
        </div>
        <div class="col">
            <h2>{{ Auth::user()->name }}</h2>
        </div>

    </div>
    <div class="row content--menus">
        <div class="col-3 content--menu_left">
            <div class="row content--bank_image mx-auto">
                <img src="{{url('/courthouse1.png')}}" alt="">
            </div>
            <div class="row">
                <a href="/banksampah/statusbank">
                    <h1 class="text-center mt-3">STATUS</h1>
                </a>
            </div>
        </div>
        <div class="col content--menu_right">
            <div class="row">

            </div>
            <div class="row">

            </div>
        </div>
    </div>

@endsection
