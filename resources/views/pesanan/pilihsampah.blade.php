@extends('layout.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')
@section('konten')
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

        h4 {
            margin-left: 20px
        }
    </style>

    <body>

        <div class="container-fluid pb-4 mt-2">
            <div class="row">
                <div class="col-sm-3"><img src="{{ url('/image/pengguna/sampah.png') }}" class="rounded" alt=""
                        width="275"></div><br>
                <div class="col-sm-8">
                    <h3><b>Get Your Trash Picked Up Here and Don't Forget To Choose Trash Type and Set The Location!<b>
                </div>
            </div>
        </div>

        <form class="mt-3" action="/pengguna/pesan/postsampah" method="POST">
            @csrf
            <div class="card text-center bg-light">
                <div class="card-header">
                    Choose Trash Type
                </div>
                <div class="card-body">
                    <br>
                    <div class="d-inline-flex p-3 text-black">
                        <div class="row align-items-center">
                            <div class="col-sm-6"><img src="{{ url('/image/pengguna/anorganic.png') }}"
                                    class="rounded" alt="" width="115"></div>
                            <div class="col-sm-5"><img src="{{ url('/image/pengguna/organic.png') }}"
                                    class="rounded" alt="" width="115"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Organic<h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4 style="margin-left: 40px">Anorganic<h4>
                                </div>
                            </div>
                            <br> <br>
                            <div class="row align-items-center">
                                <br> <br>
                                <div class="col-sm-12">
                                    <select class="form-select" id="jenis_sampah" name="jenis_sampah" aria-label="Default select example">
                                        <option selected>Select Trash Type</option>
                                        <option value="Organic">Organic</option>
                                        <option value="Anorganic">Anorganic</option>
                                    </select>
                                    <div class="form-group mt-2">
                                        <label for="volume">Volume (kg)</label>
                                        <input class="form-control" type="number" id="volume" name="volume"
                                            placeholder="Berapa volume sampah yang ingin kamu kirim?">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </div>

        </form>


    </body>

    </html>

@endsection
