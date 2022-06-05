@extends('layouts.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')
    <style>
        img {
            margin-left: 100px;
            float: left;
        }

        h4,
        p,
        h1 {
            margin-top: -10px
        }


        h4{
            margin-left: 100px
        }

        span {
            float: right;
            font-size: 30px;
        }

        u {
            float: right;
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
                            <h3>Alamat </h3>
                            <br>
                            <p>RafzNgganteng@gemesl.com
                            <p>
                                <br>
                            <p><u>Edit Profile</u></p>
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
                            <h3>Pembayaran </h3>
                            <br>
                            <h4>Cash</h4>
                            <p>
                                <br>
                            <p><u>Edit Profile</u></p>
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
                            <h3>Jenis Sampah <span>Organik</span> </h3>
                    
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
