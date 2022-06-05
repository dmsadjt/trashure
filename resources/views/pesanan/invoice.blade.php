@extends('layouts.layout')
@section('text1', 'Pesan')
@section('text2', 'Informasi')

@section('content')



    <div class="container">
        <div class="container-fluid align-self-center col-md-8" style=" margin-top : 2em">
            <nav class="navbar navbar-light bg-light" id="navtambah">
                <div class="container-fluid">
                    <span class="navbar-brand">Invoice</span>
                </div>
            </nav>


            <form action="/store" method="post">
                {{ csrf_field() }}
                <div>

                    <div class="form-group">
                        Judul Informasi <input class="form-control" type="text" name="name" required="required"> <br />
                        Informasi
                        <textarea class="form-control" type="text" name="informasi" required="required"> </textarea> <br />
                        Gambar <input class="form-control" type="text" name="gambar" required="required"> <br />
                    </div>
                </div>


                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid justify-content-end">
                        <a href="/overview-informasi">
                            <button class="btn btn-outline-success" type="button" style="margin: 10px">Cancel</button>
                        </a>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </nav>
            </form>
        </div>
    </div>

@endsection
