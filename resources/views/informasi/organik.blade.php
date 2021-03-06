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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

    </head>

    <body>

        <style>
            .informasi {
                width: 175px;
                height: 155px;
                left: 670px;
                top: 193px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            h5 {
                width: 525px;
                height: 16px;
                left: 457px;
                top: 362px;

                font-style: normal;
                font-weight: 700;
                font-size: 48px;
                line-height: 16px;

                display: flex;
                justify-content: center;

                color: #000000;
            }

        </style>

        <div class="container">
            @foreach ($informasi as $i)
                <div class="row align-items-center justify-content-center">
                    <img src="/gambar/{{$i->gambar}}" alt="gambar-informasi" class="informasi text-center rounded shadow mt-5 bg-secondary">
                    <h2 class="mt-5">{{$i->judul}}</h2>
                    <p class="mt-5">
                        {{$i->informasi}}
                    </p>
                </div>
            @endforeach

        </div>


    </body>

    </html>
@endsection
