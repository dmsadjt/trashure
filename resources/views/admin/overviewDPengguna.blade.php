@extends('layouts.layoutDPengguna')
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
                    <a href="/adddatapengguna">
                        <button type="button" class="btn btn-primary">+ Tambah Data Pengguna</button>
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
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>PHONE NUMBER</th>
                    <th>BALANCE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengguna as $p)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->password }}</td>
                        <td>{{ $p->no_telepon }}</td>

                        <td>
                            <a href="">
                                <input type="button" id="editButton" value="edit">
                            </a>
                            <a href="">
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
