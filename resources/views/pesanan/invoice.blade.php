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

                <div class="col-sm-4">
                    <h3><span>&#60;</span> Invoice Pesanan</h3>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-2"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div>
                                        <img src="{{ URL::asset('/image/bookmark.png') }}" alt="bookmark Pic" height="100"
                                            width="100">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div>
                                        <h3>Informasi Pengiriman </h3>
                                    </div>
                                    <div class="row">
                                        <p class="col-md-5">
                                            Alamat Penjemputan
                                        </p>
                                        <p class="col-md-1">:
                                        <p class="col-md-6">
                                            {{$pesanan->alamat_pengguna}}
                                        </p>
                                    </div>

                                    <div class="row">
                                        <p class="col-md-5">
                                            Alamat Pengantaran
                                        </p>
                                        <p class="col-md-1">:
                                        <p class="col-md-6">
                                            {{$banks->profile->alamat}}
                                        </p>
                                    </div>
                                </div>
                            </div>

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
                            <div class="row">
                                <div class="col-lg-3">
                                <div>
                                    <img src="{{ URL::asset('/image/credit.png') }}" alt="biaya Pic" height="100"
                                        width="100">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <h3>Rincian Biaya </h3>
                                </div>
                                <div class="row">
                                    <p class="col-md-5">
                                        Metode Pembayaran
                                    </p>
                                    <p class="col-md-1">:
                                    <p class="col-md-6"> {{$pay->jenis_pembayaran}}</p>
                                </div>

                                <div class="row">
                                    <p class="col-md-5">
                                        Total Tagihan
                                    </p>
                                    <p class="col-md-1">:
                                    <p class="col-md-6"> 60.000
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <form action="/pengguna/pesan/postPesanan" method="POST">
                    @csrf
                    <input type="submit" value="Kirim Pesananmu!" class="btn btn-success">
                </form>
            </div>
        </div>



    </body>

@endsection
