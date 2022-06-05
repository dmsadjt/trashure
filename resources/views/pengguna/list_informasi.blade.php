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
    .informasi {
        width: 202px;
        height: 165px;
        left: 670px;
        top: 193px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-body {
        width: 1000px;
        height: 100px;
        left: 220px;
        top: 423px;

        background: #FFFFFF;
    }

    .card {
        box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
    }

</style>

<div class="container">
    <div class="row align-items-center justify-content-center">
        <img src="{{url('/informasi.png')}}" alt="" class="informasi mt-5">
        <br>
    </div>

    @foreach ($informasi as $i)
        <div class="row mt-5">
            <a href="/informasi/list/{{$i->info_id}}">
            <div class="card">
                <div class="card-body">
                    <p class="mt-3 ms-5">{{$i->judul}}</p>
                </div>
            </div>
            </a>
        </div>
    @endforeach

    <div class="row mt-5">
        <a href="/informasi/list/organik">
          <div class="card">
            <div class="card-body">
                <p class="mt-3 ms-5">Jenis Sampah Organik</p>
            </div>
          </div>
        </a>
    </div>
    <div class="row mt-5">
        <a href="#">
          <div class="card">
            <div class="card-body">
                <p class="mt-3 ms-5">Jenis Sampah Non - Organik</p>

            </div>
          </div>
        </a>
    </div>
    <div class="row mt-5">
        <a href="#">
          <div class="card">
            <div class="card-body">
                <p class="mt-3 ms-5">Cara Mendaur Ulang Sampah</p>

            </div>
          </div>
        </a>
    </div>
    <div class="row mt-5">
        <a href="#">
          <div class="card">
            <div class="card-body">
                <p class="mt-3 ms-5">Cara Membuat Pupuk Kompos</p>

            </div>
          </div>
        </a>
    </div>
    {{-- <div class="row align-items-center">
        <a href="#" class="btn">Jenis Sampah Organik</a>
    </div> --}}
</div>

</body>
</html>
@endsection
