@extends('layouts.navbar-mitra')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')
    <style>
        .nav-tab>li {
            background-color: transparent !important;
        }

        .nav-tab>li>a:hover {
            background-color: #45fa2d
        }

        .nav-tab>li>a:focus,
        .nav-tab>li>a:active {
            background-color: #2bff00;
        }

        .a {
            float: right;
            margin-right: 120px;
        }

        .b {
            float: right;
            margin-right: 10px;
        }

        .c {
            float: right;
            margin-right: 60px;
        }

        .text {
            margin-left: 250px;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            margin-top: 0.7em;
        }

        .driver {
            margin-left: 50px;
        }

        table {
            margin-top: 60px;
        }

        .ongoing {
            width: 1248px;
            height: 408px;
        }

        .konten2 {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        }

        .trukSampah {
            width: 433.05px;
            height: 407.89px;
            margin-left: 50px;
            filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.25));
        }

        .text-mitra {
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 39px;

            color: #000000;
        }
    </style>

    <body>

        <div class="container">
            <div class="row mb-5 mt-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body" style="display: inline-block">
                            <ul class="nav nav-tab nav-justified " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#history"><b>History</b></a>
                                </li>
                                <li class="nav-item" id="nav2">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ongoing"><b>Ongoing</b></a>
                                </li>
                                <li class="nav-item" id="nav3">
                                    <a class="nav-link" data-bs-toggle="tab" href="#available"><b>Available</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="history" class="container tab-pane active"><br>
                        <div class="card" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                            @foreach ($pesanan_done as $p)
                                    <div class="card-body bg-danger">
                                        <img src="{{ url('/pemungut.png') }}" height="120" width="100"
                                            class="float-start">
                                        <div class="text">
                                            <h3>{{ $p->status_pesanan }} <br>{{ $p->waktu_pemesanan }}</h3>
                                            <div>
                                                <h5>{{ $p->jenis_sampah }}</h5>
                                            </div>
                                            <div>
                                                <h5>{{ $p->volume }} kg</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>


                    <div id="ongoing" class="container tab-pane fade"><br>
                        <div class="card" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                            <div class="bg-primary">
                                <div style="width:100%;height:4rem;"></div>
                                @foreach ($pesanan_ongoing as $p)
                                    <div class="card-body bg-danger">
                                        <img src="{{ url('/pemungut.png') }}" height="120" width="100"
                                            class="float-start">
                                        <div class="text">
                                            <h3>{{ $p->status_pesanan }} <br>{{ $p->waktu_pemesanan }}</h3>
                                            <div>
                                                <h5>{{ $p->jenis_sampah }}</h5>
                                            </div>
                                            <div>
                                                <h5>{{ $p->volume }} kg</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <form action="/mitra/pesanan/ambilPesanan/" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $p->id }}">
                                            <input type="submit" value="Ambil Pesanan">
                                        </form>
                                    </div>
                                @endforeach

                            </div>

                            <div class="bg-danger">
                                <div style="width:100%;height:4rem;"></div>
                                @foreach ($pesanan_finish as $p)
                                    <div class="card-body">
                                        <img src="{{ url('/pemungut.png') }}" height="120" width="100"
                                            class="float-start">
                                        <div class="text">
                                            <h3>{{ $p->status_pesanan }} <br>{{ $p->waktu_pemesanan }}</h3>
                                            <div>
                                                <h5>{{ $p->jenis_sampah }}</h5>
                                            </div>
                                            <div>
                                                <h5>{{ $p->volume }} kg</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <form action="/mitra/pesanan/selesaikanPesanan/" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $p->id }}">
                                            <input type="submit" value="Selesaikan Pesanan">
                                        </form>
                                    </div>
                                @endforeach
                            </div>

                        </div>



                        @foreach ($pesanan as $p)
                            <div id="available" class="container tab-pane fade"><br>
                                <div class="card" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                                    <div class="card-body">
                                        <img src="{{ url('/pemungut.png') }}" height="120" width="100"
                                            class="float-start">
                                        <div class="text">
                                            <h3>{{ $p->status_pesanan }} <br>{{ $p->waktu_pemesanan }}</h3>
                                            <div>
                                                <h5>{{ $p->jenis_sampah }}</h5>
                                            </div>
                                            <div>
                                                <h5>{{ $p->volume }} kg</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <form action="/mitra/pesanan/terimaPesanan/" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $p->id }}">
                                            <input type="submit" value="Terima Pesanan">
                                        </form>
                                    </div>
                                </div>
                        @endforeach

                    </div>
                </div>
            </div>

    </body>
@endsection
