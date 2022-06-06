@extends('layouts.navbar-pengguna')
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

        h3 {

            padding-left: 22px;
            padding-top: 50px
        }

        .card {
            margin-bottom: 5px
        }
    </style>

    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <div class="row align-item-center">
                                <div class="col-sm-5"><img src="{{ url('/image/poins.png') }}" class="rounded"
                                        alt="" width="150"></div><br>
                                <div class="col-sm-7">
                                    <h3><b>0 Poin<b>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-3"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm-4">
                    <h4>History</h4>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body" style="display: inline-block">
                        <h4>Juni 2022 </h4>
                        <br>
                        <p>Top Up Credit 50000 <span>+ 5 Point</span>
                    </div>
                </div>
            </div>

        </div>
        </div>

    </body>

@endsection
