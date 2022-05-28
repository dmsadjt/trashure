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

                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Informasi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tanggal Pembuatan</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <th scope="row">1</th>
                <td>Placeholder</td>
                <td>Placeholder</td>
                <td>Placeholder</td>
                <td>placeholder</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>isian</td>
                <td>isian</td>
                <td>isian</td>
                <td>isian</td>

            </tr>
        </tbody>
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
