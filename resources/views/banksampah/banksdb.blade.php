@extends('layouts.navbarBanks')
@section('title','Dashboard')
@section('content')
    <div class="row content--notification">
        <div class="col content--notification_image">
            <div class="image--placeholder"></div>
        </div>
        <div class="col content--notification_message">
            <h1>Waste Bank Vrindavan</h1>
            <p>Check your Notification if any order is coming to your waste bank!</p>
        </div>
    </div>
    <div class="row content--menu">
        <div class="col-6 content--menu_profile">
            <div class="row">
                <div class="image--placeholder"></div>
            </div>
            <div class="row">
                <p>Waste Bank Profile</p>
            </div>
        </div>
        <div class="col content--menu_order">
            <div class="row">
                <div class="image--placeholder"></div>
            </div>
            <div class="row">
                <p>Order List</p>
            </div>
        </div>
    </div>

@endsection
