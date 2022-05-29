@extends('layouts.layout')
@section('content')
    <div class="row text-center m-5 ">
        <h1>Your Driver has been Found!</h1>
    </div>
    <div class="container driver">

        <div class="row align-items-center">
            <div class="col">
                <img src="{{ url('/image/pengguna/egantenk.png') }}" class="image" alt="">
            </div>
            <div class="col-6">
                <table class="table">
                    <tr>
                        <td>Driver Name : </td>
                        <td>Ega Fernanda Putra</td>
                    </tr>
                    <tr>
                        <td>License Plate : </td>
                        <td>L 6519 AD</td>
                    </tr>
                    <tr>
                        <td>Vehicle Used : </td>
                        <td>CBR 250 RR</td>
                    </tr>
                    <tr>
                        <td>Phone Number : </td>
                        <td>+6281332970326</td>
                    </tr>
                </table>
            </div>
            <div class="col alamat">
                <div class="row">
                    From : Perumahan PandanSari 3
                </div>
                <div class="row">
                    To : Kuvukiland National Waste Bank
                </div>
            </div>
        </div>
    </div>
@endsection
