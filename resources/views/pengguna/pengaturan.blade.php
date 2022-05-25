@extends('layout.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')
    <style>
        img {
            margin-left: 100px;
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
            font-size: 30px;

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
                        <div class="card-body" style="display: inline-block"> <img
                                src="{{ URL::asset('/image/rafz.jpeg') }}" alt="profile Pic" height="150" width="150"
                                class="float-start, rounded-circle">
                            <div class="text">
                                <h2><b>Rafz Ngganteng</b></h2>
                                <h4>08129123912</h4>
                                <p>RafzNgganteng@gemel.com
                                <p>
                                    <br>
                                    <u>Edit Profile</u>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-2"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <h3>Orders <span>&#62;</span> </h3>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <h3>My Vouchers <span>&#62;</span> </h3>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <h3>Saved Address <span>&#62;</span> </h3>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <h3>Change Language <span>&#62;</span> </h3>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>
    </body>

@endsection
