@extends('layouts.navbar-mitra')
@section('title','Dashboard Mitra')
@section('content')
<div class="container">
    <div id="statistik" class="d-flex p-3 bg-secondary text-white">
        <h2>Statistik Sesuatu</h2>
    </div>
    <div id="statistik" class="d-flex p-3 bg-secondary text-white">
        <p>Penjelasan statistik sesuatu</p>
        <i class='fas fa-user-alt' style='font-size:36px'></i>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="d-flex  pt-4 pb-3 justify-content-center bg-success mb-3">
                <img src="{{ URL::asset('/image/truck.png') }}" alt="profile Pic" height="125" width="125">
                <div class="d-flex align-items-center " style="height:125px">
                    <h1>&nbsp;&nbsp;&nbsp;Trash Pickups</h1>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="d-flex pt-3 pb-4 justify-content-center bg-success mb-3">
                <img src="{{ URL::asset('/image/map.png') }}" alt="profile Pic" height="125" width="125">
                <div class="d-flex align-items-center " style="height:125px">
                    <h1>&nbsp;&nbsp;&nbsp;Map</h1>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h2> Hot News </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="d-flex pt-2 pb-2 justify-content-center bg-success mb-3">
                <img src="{{ URL::asset('/image/sampah1.png') }}">

            </div>
        </div>
    </div>
@endsection
