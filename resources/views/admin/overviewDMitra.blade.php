@extends('layouts.navbar-admin')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    </head>


    <style>
        .container {
            margin-top: 10px
        }

        .btn-primary {
            position: absolute;
            right: 0;
            margin-right: 10px
        }

    </style>

    <body>


        <div class="container">
            <div class="row">
                <div class="col">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="col">
                    <a href="/admin/mitra/adddatamitra">
                        <button type="button" class="btn btn-primary">+ Tambah Mitra</button>
                    </a>
                </div>
            </div>


            <br>

        </div>


        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>CHECK</th>
                    <th>NAME</th>
                    <th>ROLE ID</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    {{-- <th>PASSWORD</th> --}}
                    <th>PHONE NUMBER</th>
                    <th>NOMOR REKENING</th>
                    <th>KENDARAAN</th>
                    <th>PLAT KENDARAAN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mitra as $m)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->role_id }}</td>
                        <td>{{ $m->profile->alamat }}</td>
                        <td>{{ $m->email }}</td>
                        {{-- <td>{{ $p->password }}</td> --}}
                        <td>{{ $m->profile->no_telepon }}</td>
                        <td>{{ $m->profile->no_rekening }}</td>
                        <td>{{$m->profile->kendaraan}}</td>
                        <td>{{$m->profile->plat_kendaraan}}</td>

                        <td>
                            <a href="/admin/mitra/editdatamitra/{{ $m->id }}">
                                <input type="button" id="editButton" value="edit">
                            </a>
                            <a href="/admin/mitra/hapusdatamitra/{{ $m->id }}">
                                <input type="button" id="deleteButton" value="delete">
                            </a>

                        </td>
                    </tr>
                @endforeach


            </tbody>


        </table>



        {{-- javascript --}}
        <script s>
            src = "https://code.jquery.com/jquery-3.5.1.js"
        </script>
        <script>
            src = "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"
        </script>
        <script>
            src = "https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"
        </script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#example tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        <script>
            $("#example").DataTable({
                searching: false,
                ordering: false,
                lengthMenu: [
                    [5, 10, 15, 25, 50, -1],
                    [5, 10, 15, 25, 50, "All"]
                ]
            })
        </script>

    </body>
@endsection

</html>
