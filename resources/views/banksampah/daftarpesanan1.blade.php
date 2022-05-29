@extends('layouts.layout')
@section('text1', 'Profil Bank')
@section('text2', 'Daftar Pesanan')

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
    margin-left: 150px
}
.driver {
    margin-left: 50px;
}
#cardz{
    margin-left: 100px
}
    </style>
<body>

<div class="container">
    <br>
    <div class="row" >

        <div class="col-sm-2">
            <h3 style = ><span >&#60;</span> &nbsp;Orders List </h3>
        </div>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2"></div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">  <div class="card">
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
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="history" class="container tab-pane active"><br>
                        <div class="card">
                            <div class="card-body" style="display: inline-block"> <img
                                    src="{{ URL::asset('/image/paper.png') }}"  height="120" width="100"
                                    class="float-start">
                                <div class="text">
                                    <h3><b>Accept Trash</b> </h3>
                                    <h5>Driver Name : RubenGod <span class ="a"> Trash Delivered <span></h5>
                                    <h5>Plate Number: L 444 SYU <span class ="b"> 26 February 2002 02.00 PM <span></h5>
                                    <h5>Vehicle Used: Zx 150 R </h5>

                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body" style="display: inline-block"> <img
                                    src="{{ URL::asset('/image/paper.png') }}"  height="120" width="100"
                                    class="float-start">
                                <div class="text">
                                    <h3><b>Accept Trash</b> </h3>
                                    <h5>Driver Name : TamGod <span class ="a"> Trash Delivered <span></h5>
                                    <h5>Plate Number: T 444 M <span class ="c"> 17 July 2021 05.00 PM <span></h5>
                                    <h5>Vehicle Used: Kawasaki Honda </h5>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="ongoing" class="container tab-pane fade" style = "align-text: center" ><br>
                      <h3 style="text-align: center"><b>ORDER IT'S ON THE WAY NOW!</b></h3>
                      <img src="{{ URL::asset('/image/truck2.png') }}" alt="profile Pic" height="110" width="110" class="mx-auto d-block">
                      <div class="card">
                         <div class="card-body" style="display: inline-block"> <img
                            src="{{ URL::asset('/image/ega.png') }}" alt="Card image" height= "400" width = "300"
                                    class="float-start">
                                <div class="text2">

                                    <div class="card-body" style="display: inline-block" id="cardz">
                                      <h3 class="card-header">Ega Fernanda Putra</h3>
                                      <h4 class="card-body">L 366 YO</h4>
                                      <h4 class="card-footer">Mclaren F1</h4>
                                      <br><br>
                                      <h3 class="card-header">From</h3>
                                      <h4 class="card-body">Rumahku</h4>
                                      <h3 class="card-header">To</h3>
                                      <h4 class="card-footer">Rumahmu</h4>

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
