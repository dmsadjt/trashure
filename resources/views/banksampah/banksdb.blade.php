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
            <h2 style="font-weight: 700">{{ Auth::user()->name }}</h2>
        </div>

    </div>
    <div class="row content--menus">
        <div class="col-3 content--menu_left">
            <div class="row content--bank_image mx-auto">
                <img src="{{url('/courthouse1.png')}}" alt="">
            </div>
            <div class="row">
                    <h1 class="text-center mt-3">STATUS</h1>
            </div>
            <div class="row">
                <span class="status-bank {{$banks->profile->status_bank=="Inactive"?"inactive":"Active"}}">{{$banks->profile->status_bank}}</span>
            </div>
        </div>
        <div class="col content--menu_right">
            <div class="row align-items-center">
                <div class="col-6 mx-auto mt-3">
                    <form action="/banksampah/ubahstatus" method="POST" class="form_status">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$banks->id}}">
                        <div class="row">
                            <input type="radio" class="btn-check" name="status_bank" value="Active" id="success-outlined">
                            <label class="btn btn-success" for="success-outlined">Active</label>
                        </div>
                        <br class="mt-4">
                        <div class="row">
                            <input type="radio" class="btn-check" name="status_bank" value="Inactive" id="danger-outlined">
                            <label class="btn btn-danger" for="danger-outlined">Inactive</label>
                        </div>
                        <div class="row mt-3">
                            <input type="submit" value="Simpan Data">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>

@endsection
