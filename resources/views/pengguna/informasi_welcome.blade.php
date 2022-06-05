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

<style>
    .row {
        margin-top: 15em;
    }

    .btn {
        margin-top: 5em;
        background-color: #16C827;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="fw-normal" style="margin-bottom: 20px">welcome!</p>
                <h2 class="mb-4 fw-semibold">Kenali sampah anda untuk menjaga<br> lingkungan anda.</h2>
                <hr>
                <a href="/informasi/list" class="btn fw-semibold mt-4">Start Now!</a>
            </div>
            <div class="col-9">

            </div>
        </div>
    </div>

</body>
</html>
@endsection
