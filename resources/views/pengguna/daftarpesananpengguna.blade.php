@extends('layout.layout')
@section('konten')
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
            margin-left: 150px
        }

        .driver {
            margin-left: 50px;
        }

        table {
            margin-top: 60px;
        }
    </style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
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
                                <li class="nav-item" id="nav2">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ongoing"><b></b></a>
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

                        @foreach ($join as $p)
                            <div class="card">
                                <div class="card-body" style="display: inline-block"> <img
                                        src="{{ URL::asset('/image/paper.png') }}" height="120" width="100"
                                        class="float-start">
                                    <div class="text">
                                        <h3><b>Angkut Sampah</b> </h3>
                                        <h5><span class="a"> {{ $p->status_pesanan }} <span></h5>
                                        <h5><br>
                                            {{ $p->name }}

                                            <span class="c"> {{ $p->waktu_pemesanan }}<span>

                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach


                    </div>

                    <div id="ongoing" class="container tab-pane fade" style="align-text: center"><br>
                        <h3 style="text-align: center"><b>ORDER IT'S ON THE WAY NOW!</b></h3>

                        <img src="{{ URL::asset('/image/truck2.png') }}" alt="profile Pic" height="110" width="110"
                            class="mx-auto d-block">

                                @foreach ($join_mitra as $m)
                                <div class="card">
                                    <div class="row align-items center">
                                        <div class="col-sm-3">
                                            <div class="card-body" style="display: inline-block"> <img
                                                    src="{{ URL::asset('/image/ega.png') }}" alt="Card image">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <table class="table">
                                                <thead align="left">
                                                    <th></th>
                                                    <th>Driver</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                        <td>Driver Name : </td>
                                                        <td><b>{{$m->name}}<b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>License Plate : </td>
                                                        <td><b>{{$m->plat_kendaraan}}<b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vehicle Used : </td>
                                                        <td><b>{{$m->kendaraan}}<b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone Number : </td>
                                                        <td><b>{{$m->no_telepon}}<b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-sm-3">
                                            <table class="table">
                                                <thead align="left">
                                                    <th> </th>
                                                    <th>Destination</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>From : </td>
                                                        <td><b>{{$m->alamat}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>To :</td>
                                                        <td><b>
                                                        <b></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                @endforeach



                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="col-sm-2"></div>
        </div>
    </body>
@endsection
