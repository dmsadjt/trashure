@extends('layouts.navbar-admin')
@section('title', 'Tambah Informasi')

@section('content')


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
        <div class="row align-items-center justify-content-center">
            <img src="{{ url('/recycle2.png') }}" alt="" class="informasi mt-5">
            <h5 class="mt-5">Informasi</h5>
            <br>


            <form action="/admin/informasi/postInformasi" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input class="form-control" type="text" name="judul" id="judul" required="required"> <br />
                        <label for="informasi">Informasi</label>
                        <textarea class="form-control" type="text" name="informasi" id="gambar" required="required"> </textarea> <br />
                        <label for="gambar">Upload Gambar</label>
                        <input class="form-control" type="file" name="gambar" id="gambar" required="required"> <br />
                    </div>
                </div>


                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid justify-content-end">
                        <a href="/admin/overview-informasi">
                            <button class="btn btn-outline-success" type="button" style="margin: 10px">Cancel</button>
                        </a>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </nav>
            </form>
        </div>
    </div>

@endsection
