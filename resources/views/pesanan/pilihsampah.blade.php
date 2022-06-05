@extends('layouts.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')
@section('content')
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .container-fluid {
        background-color: rgb(5, 167, 5)
    }
    h3 {

        padding-left: 30px;
        padding-top: 30px
    }
    .btn-success {
        background-color: rgb(5, 167, 5)
    }
    h4{
        margin-left: 20px
    }
    </style>
<body>

    <div class="container-fluid pb-4 mt-2">
        <br>
        <div class="row">
        <div class="col-sm-3"><img src="{{ url('/image/pengguna/sampah.png') }}" class="rounded" alt="" width="275"></div><br>
        <div class="col-sm-8"><h3><b>Get Your Trash Picked Up Here and Don't Forget To Choose Trash Type and Set The Location!<b></div>
      </div>
    </div>
    <br><br>
    <div class="card text-center bg-light">
        <div class="card-header">
            Choose Trash Type
        </div>
        <div class="card-body">
            <br>
            <div class="d-inline-flex p-3 text-black">
                <div class="row align-items-center">
                <div class="col-sm-6"><img src="{{ url('/image/pengguna/anorganic.png') }}" class="rounded" alt="" width="115"></div>
                <div class="col-sm-5"><img src="{{ url('/image/pengguna/organic.png') }}" class="rounded" alt="" width="115"></div>
                <div class="row">
                    <div class="col-sm-6"><h4>Organic<h4></div>
                        <div class="col-sm-5"><h4 style="margin-left: 40px">Anorganic<h4></div>
                </div>
                <br> <br>
                <div class="row align-items-center">
                    <br> <br>
                    <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Trash Type</option>
                        <option value="1">Organic</option>
                        <option value="2">Anorganic</option>
                      </select>
                    </div>
                </div>
            </div>
              </div>
              <br><br>
        </div>
        <div class="card-footer text-muted">
            <button type="button" class="btn btn-primary ">Submit</button>
        </div>
      </div>
</body>
</html>

@endsection
