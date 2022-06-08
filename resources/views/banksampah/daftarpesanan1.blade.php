@extends('layouts.navbarBanks')
@section('text1', 'Profil Bank')
@section('text2', 'Daftar Pesanan')

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
            margin-left: 150px
        }

        .driver {
            margin-left: 50px;
        }

        table {
            margin-top: 60px;
        }
    </style>

    <body>

        <div class="container">
            <br>
            <div class="row">

                <div class="col-sm-2">
                    <h3 style=><span>&#60;</span> &nbsp;Orders List </h3>
                </div>
                <div class="col-sm-8">
                </div>
                <div class="col-sm-2"></div>

                <div class="row">
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

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="history" class="container tab-pane active"><br>

                            @foreach ($pesanan as $p)
                            <div class="card">
                                <div class="card-body" style="display: inline-block"> <img
                                        src="{{ URL::asset('/image/paper.png') }}" height="120" width="100"
                                        class="float-start">
                                    <div class="text">
                                        <h3><b>Accept Trash</b> </h3>
                                        <h5>Driver Name : RubenGod <span class="a"> {{$p->status_pesanan}} <span></h5>
                                        <h5>Plate Number: L 444 SYU <span class="b"> {{$p->waktu_pemesanan}}
                                                <span></h5>
                                        <h5>Vehicle Used: ZX150 R </h5>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div id="ongoing" class="container tab-pane fade" style="align-text: center"><br>
                            <h3 style="text-align: center"><b>ORDER IT'S ON THE WAY NOW!</b></h3>

                            <img src="{{ URL::asset('/image/truck2.png') }}" alt="profile Pic" height="110" width="110"
                                class="mx-auto d-block">
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
                                                    <td><b>Ega Fernanda Putra<b></td>
                                                </tr>
                                                <tr>
                                                    <td>License Plate : </td>
                                                    <td><b>L 6519 AD<b></td>
                                                </tr>
                                                <tr>
                                                    <td>Vehicle Used : </td>
                                                    <td><b>CBR 250 RR<b></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number : </td>
                                                    <td><b>+6281332970326<b></td>
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
                                                    <td><b> Perumahan Pandansari 3</td>
                                                </tr>
                                                <tr>
                                                    <td>To :</td>
                                                    <td><b>Vrindavan Waste Bank<b></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                            </div>

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
