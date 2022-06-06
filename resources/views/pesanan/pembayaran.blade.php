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
        <div class="container ">
            <form action="/pengguna/pesan/postPembayaran" method="POST">
                <div class="row mt-5">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="card">
                            {{ csrf_field() }}
                            <div class="card-body" style="display: inline-block">
                                <h3>
                                    {{ $pesanan->alamat_pengguna }}
                                </h3>


                                <p>{{ $user->email }}</p>


                                <p><u>Edit Profile</u></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>


                <div class="row mt-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body" style="display: inline-block">
                                <h3>Pembayaran</h3>
                                <select class="form-select" name="opsi_pembayaran" id="opsi_pembayaran">
                                    @foreach ($opsi as $o)
                                        <option value="{{$o->pembayaran_id}}">{{$o->jenis_pembayaran}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>



                <div class="row mt-3">
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


                <div class="row mt-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body" style="display: inline-block">
                                <h3>Total Tagihan <span>60.000</span> </h3>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                <div class="row mt-5">
                    <div class="col d-grid mx-auto">
                        <input type="submit" class="btn btn-lg btn-success mx-auto" value="Submit">
                    </div>
                </div>

            </form>


            </div>
    </body>

@endsection
