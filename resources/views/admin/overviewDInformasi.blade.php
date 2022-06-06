@extends('layouts.navbar-admin')
@section('content')
    <div class="row mt-5">
        <h1>Overview Data Informasi</h1>
    </div>
    <div class="row mt-5">
        <div class="col">
            <input class="form-control" id="myInput" type="text" placeholder="   Search..">
            <span>
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary">Cari</button>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Informasi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tanggal Pembuatan</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($informasi as $i)
            <tr>
                <th >{{$i->info_id}}</th>
                <td>{{$i->judul}}</td>
                <td>{{$i->informasi}}</td>
                <td><a href="{{$i->gambar}}">{{$i->gambar}}</a></td>
                <td>{{$i->tanggal_pembuatan}}</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Hapus</a></td>
            </tr>
            @endforeach
    </table>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
