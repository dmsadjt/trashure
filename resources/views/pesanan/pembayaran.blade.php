@extends('layouts.navbar-pengguna')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')
    <style>
        img {
            margin-left: 20px;
            float: left;
        }

        h4,
        p,
        h1 {
            margin-top: -10px
        }


        h4 {
            margin-left: 100px
        }

        span {
            float: right;
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

                            <p>RafzNgganteng@gemesl.com</p>

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
                            <img src="{{ URL::asset('/image/credit.png') }}" alt="biaya Pic" height="50"
                                width="50">
                            <h4>Cash</h4>
                            <p>
                            <p><u>Ganti Pembayaran</u></p>
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
                            <h3>Total Tagihan <span>60.000</span> </h3>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>
    </body>

@endsection
