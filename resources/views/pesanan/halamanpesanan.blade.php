@extends('layouts.navbar-pengguna')
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
            Choose Trash Type And Location First !
        </div>
        <div class="card-body">
            <br>
            <div class="d-grid gap-4 col-4 mx-auto">
                <button onclick ="location.href='{{ url('/pengguna/pilihsampah') }}'" class="btn btn-success" type="button" >Pilih Kategori Sampah</button>
                <button onclick ="location.href='{{ url('/pengguna/pilih-alamat') }}'" class="btn btn-success" type="button" >Pilih Alamat dan Bank Sampah</button>
              </div>
              <br>
        </div>
        <div class="card-footer text-muted">
            <button type="button" class="btn btn-primary col-2">Order</button>
        </div>
      </div>
</body>
</html>

@endsection
