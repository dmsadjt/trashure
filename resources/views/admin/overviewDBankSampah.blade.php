@extends('layouts.navbar-admin')
@section('content')
    <div class="row mt-5">
        <h1>Overview Data Bank Sampah</h1>
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
                <th>NAME</th>
                <th>ROLE ID</th>
                <th>ADDRESS</th>
                <th>EMAIL</th>
                <th>Nomor Telepon</th>
                <th>Nama Bank Sampah</th>
                <th>Status Bank</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($banks as $b)
                <tr>
                    <th>{{ $b->name }}</th>
                    <td>{{ $b->role_id }}</td>
                    <td>{{ $b->profile->alamat }}</td>
                    <td>{{ $b->email}}</td>
                    <td>{{ $b->profile->no_telepon}}</td>
                    <td>{{ $b->profile->nama_bank }}</td>
                    <td>{{ $b->profile->status_bank }} </td>
                    <td><a href="/admin/banksampah/editData/{{$b->id}}">Edit</a></td>
                    <td><a href="/admin/banksampah/hapusData/{{$b->id}}">Delete</a></td>
                </tr>
            @endforeach
    </table>

    <div>
        <a href="/admin/banksampah/tambahData" class="btn btn-success">Tambah Bank Sampah</a>
    </div>

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
