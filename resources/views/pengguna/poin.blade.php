@extends('layouts.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')
    <style>
        img {
            margin-left: 30px;
            float: left;
        }

        .text {
            margin-left: 325px;
        }

        h4,
        p,
        h1 {
            margin-top: -10px
        }

        span {
            float: right;
        }

        .card {
            margin-bottom: 5px
        }

    </style>

    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <img src="{{ URL::asset('/image/poins.png') }}" alt="poin Pic" height="125" width="125">
                            <h3>0 Poin</h3>

                        </div>

                    </div>

                </div>
                <div class="col-sm-2"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm-4">
                    <h3>History</h3>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body" style="display: inline-block">
                        <h3>Juni 2022 </h3>
                        <br>
                        <p>Top Up Credit 50000  <span>+ 5 Point</span>
                    </div>
                </div>
            </div>

        </div>
        </div>

    </body>

@endsection
