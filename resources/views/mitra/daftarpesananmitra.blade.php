@extends('layouts.navbar-mitra')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')
<style>
 .nav-tab> li {
    background-color:transparent !important;
}

.nav-tab > li > a:hover {
    background-color: #45fa2d
}
.nav-tab > li > a:focus,
.nav-tab> li > a:active {
    background-color:#2bff00;
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
                                <li class="nav-item" id="nav2">
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
                            <div class="card-body">
                                <img src="{{url('/pemungut.png')}}"  height="120" width="100" class="float-start">
                                <div class="text">
                                    <h3>TRASH DELIVERED <br>29 June 2022, 01.00 PM</h3>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-body" style="box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);">
                                <img src="{{url('/pemungut.png')}}"  height="120" width="100" class="float-start">
                                <div class="text">
                                    <h3>TRASH DELIVERED <br>6 June 2022, 10.00 AM</h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="ongoing" class="container tab-pane fade" style = "align-text: center" ><br>
                        <div class="card konten2">
                            <div class="card-body ongoing">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{url('/garbage_truck.png')}}" class="trukSampah">
                                    </div>
                                    <div class="col-6 my-auto">
                                        <div class="text-mitra">
                                            <h3>ANDA SEDANG MENGAMBIL <br>PESANAN DARI USER : <br><br>RUBEN BUDIONO</h3>
                                        </div>
                                    </div>
                                </div>
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

                </div>
    </div>
</div>

</body>
@endsection

