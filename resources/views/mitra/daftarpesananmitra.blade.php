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

        .pane {
            background-color: #2bff00 !important;
            color: #000000;
        }

        .pane.active {
            background-color: #2da31d !important;
        }

        .pane:hover {
            color: white;
            background-color: #2da31d !important;
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
            margin-top: 0.5em;
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

        .text-center {
            margin-top: 20px;
        }

        .img-pesanan{
            width: 10em;
            height: 10em;
            object-fit: cover;
        }
    </style>

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
                                <li class="nav-item" id="nav2">
                                    <a class="nav-link" data-bs-toggle="tab" href="#available"><b>Available</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
    <body>
        <ul class="nav nav-pills gap-3 border p-4 d-flex justify-content-center my-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link pane active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#available"
                    type="button" role="tab" aria-controls="available" aria-selected="true">Available</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link pane" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#ongoing"
                    type="button" role="tab" aria-controls="ongoing" aria-selected="false">Ongoing</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link pane" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#history"
                    type="button" role="tab" aria-controls="history" aria-selected="false">History</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="available" role="tabpanel" aria-labelledby="available-tab"
                tabindex="0">
                <div class="d-flex justify-content-center">
                    <h2>Pesanan Tersedia</h2>
                </div>
                @foreach ($pesanan as $p)
                    <div class="card mt-2" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <img src="{{ url('/pemungut.png') }}" height="120" width="100" class="float-start">
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
                        <div class="d-flex justify-content-center my-3">
                            <a href="/mitra/pesanan/detailpesanan/{{ $p->id }}" class="btn btn-primary">Detail
                                Pesanan</a>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab" tabindex="0">
                <div class="d-flex justify-content-center border">
                    <h3>Ambil Pesanan</h3>
                </div>
                <div>
                    @foreach ($pesanan_ongoing as $p)
                        <div class="card mt-2" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                            <div class="card-body ">
                                <img src="{{ url('/pemungut.png') }}" height="120" width="100" class="float-start">
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
                            <div class="d-flex justify-content-center my-3">
                                <a href="/mitra/pesanan/detailAmbilPesanan/{{ $p->id }}" class="btn btn-primary">Ambil
                                    Pesanan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center border mt-3">
                    <h3>Selesaikan Pesanan</h3>
                </div>
                <div>
                    @foreach ($pesanan_finish as $p)
                        <div class="card" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                            <div class="card-body">
                                <img src="{{ url('/pemungut.png') }}" height="120" width="100" class="float-start">
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
                            <div class="d-flex justify-content-center my-3">
                                <a href="/mitra/pesanan/detailSelesaikanPesanan/{{ $p->id }}" class="btn btn-primary">Selesaikan
                                    Pesanan</a>
                            </div>
                        </div>








                    </div>

                    <div id="available" class="container tab-pane active"><br>
                        <div class="card" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                            <div class="card-body">
                                <img src="{{url('/Delivery.png')}}"  height="120" width="100" class="float-start">
                                <div class="text d-flex justify-content-around">
                                    <h3>Perumahan Kuvukiland <br>65211 <br>Mulyosari </h3>
                                    <h3>3,4 KM </h3>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-body" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                                <img src="{{url('/Delivery.png')}}"  height="120" width="100" class="float-start">
                                <div class="text d-flex justify-content-around">
                                    <h3>Perumahan Sutorejo <br>60532 <br>Mulyosari </h3>
                                    <h3>3,7 KM </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
                <div class="d-flex justify-content-center">
                    <h2>Riwayat Pesanan</h2>
                </div>
                @foreach ($pesanan_done as $p)
                    <div class="card" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ url('/pemungut.png') }}" height="120" width="100" class="float-start">
                                </div>
                                <div class="col-6">
                                    <h3>{{ $p->status_pesanan }} <br>{{ $p->waktu_pemesanan }}</h3>
                                    <h5>{{ $p->jenis_sampah }}</h5>
                                    <h5>{{ $p->volume }} kg</h5>
                                </div>
                                <div class="col-4">
                                    <h5>Bukti Penyetoran</h5>
                                    <img class="img-pesanan border shadow" src="/bukti_selesai/{{$p->bukti_selesai}}" alt="gambar">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </body>
@endsection
