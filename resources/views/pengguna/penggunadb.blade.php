@extends('layout.navbar-pengguna')
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

        .carousel-item {
    height: 100vh;
    min-height: 300px;
    background: no-repeat scroll center scroll;
    -webkit-background-size: cover;
    background-size: cover;

}

.carousel-item::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #16C827;
    opacity: 0.7;
}

.carousel-caption {
    font-size: 38px;
    font-style: normal;
    font-weight: 600;
    line-height: 80px;
    letter-spacing: 0em;
    text-align: left;
    color: #fff;
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('/sampah.jpg')}}" class="d-block w-100" alt="sampah">
        <div class="carousel-caption d-none d-md-block">
          <h5>TRASHURE</h5>
          <p>Wujudkan lingkungan bersihmu bersama kami!</p>

          <div class="slider-btn">
              <a href="">
                  <button class="btn btn-success fw-bold">Learn More</button>
              </a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('/sampah2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Anda senang, kami tenang</h5>
          <p>Bingung mau buang sampah tapi dilanda rasa malas?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('/sampah3.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p>TRASHURE, hadirkan lingkungan bersih impian anda!</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Content -->
<div class="container content">

  <!-- konten row 1 -->
  <div class="row align-items-center">
    <div class="col-4">
      <p class="fw-normal" style="margin-bottom: 20px">TRASHURE</p>
      <h2 class="mb-4 fw-semibold">Tak perlu bingung <br>dengan sampah<br>di lingkungan anda</h2>
      <hr>
      <a href="#" class="btn fw-semibold mt-4">Start Now!</a>
    </div>
    <div class="col-8 d-flex justify-content-end">
      <img src="{{url('/orangduduk.png')}}" alt="orang duduk" style="width: 300px;">
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
            <h5 class="card-title text-center fw-bold">Trash Pickup</h5>
                <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{url('/truksampah.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center fw-bold">Trash Pickup</h5>
          <p class="card-text"></p>
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
