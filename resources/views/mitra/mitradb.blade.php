@extends('layout.layout')
@section('konten')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trashure</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }


      .content {
        margin-top: 10em;
        margin-bottom: 5em;

      }

      .btn {
          background-color: #16C827;
      }

      .quick {
          margin-top: 13em;
      }

      .hot {
          margin-top: 7em;
      }


        </style>

    <!-- Carousel -->

    <!-- Content -->
    <div class="container content">

      <!-- konten row 1 -->
      <div class="row align-items-center">
        <div class="col-4">
          <p class="fw-normal" style="margin-bottom: 20px">TRASHURE</p>
          <h2 class="mb-4 fw-semibold">Selamat Datang Mitra!<br> layani pelanggan dengan sepenuh hati</h2>
          <hr>
          <a href="#" class="btn fw-semibold mt-4">Start Now!</a>
        </div>
        <div class="col-8 d-flex justify-content-end">
          <img src="{{url('/phone_deliv.png')}}" alt="orang duduk" style="width: 300px;">
        </div>
      </div>

      <!-- kata quick menu -->
      <div class="row">
        <h5 class="fw-bold quick">Quick Menu</h5>
      </div>


      <!-- konten row 2 -->
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="{{url('/truksampah.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="{{ url('/mitra/pesanan/daftarpesanan') }}" class="text-dark">
                <h5 class="card-title text-center fw-bold">Order List</h5>
                <p class="card-text"></p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{url('/map.png')}}" class="card-img-top" alt="..." style="height: 277px">
            <div class="card-body">
              <a href="daftarpesananpengguna">
                <h5 class="card-title text-center fw-bold">Map</h5>
                <p class="card-text"></p>
              </a>
            </div>
          </div>
        </div>
      </div>


      <!-- kata hot news -->
      <div class="row">
        <h5 class="fw-bold hot">Hot News</h5>
      </div>

      <!-- konten row 3 -->
      <div class="row">
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
      </div>

    </div>
</body>
</html>
@endsection
