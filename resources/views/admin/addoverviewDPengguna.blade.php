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
        #navtambah {
            margin-bottom: 20px;

        }

    </style>

    <body>
        <div class="container-fluid align-self-center " style="width: 50% ; height : 50% ">
            <nav class="navbar navbar-light bg-light" id="navtambah">
                <div class="container-fluid">
                    <span class="navbar-brand">Add customer</span>
                </div>
            </nav>


            <form action="/store" method="post">
                {{ csrf_field() }}
                <div>

                    <div class="form-group">
                        ROLE ID <select class="form-control" type="text" name="role_id" required = "required">
                            <option value="" selected="" disabled="">--SELECT--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select> <br />
                        Customer name <input class="form-control" type="text" name="name" required="required"> <br />
                        Address
                        <textarea class="form-control" type="text" name="alamat" required="required"> </textarea> <br />
                        Email <input class="form-control" type="text" name="email" required="required"> <br />
                        Password <input class="form-control" name="password" required="required"> <br />
                        Phone number <input class="form-control" name="no_telepon" required="required"> <br />
                        Nomor rekening <input class="form-control" name="no_rekening" required="required"> <br />
                    </div>
                </div>



    </body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid justify-content-end">
            <a href="/overviewdata">
            <button class="btn btn-outline-success" type="button" style="margin: 10px">Cancel</button>
            </a>
            <input type="submit" value="Add customer" class="btn btn-success">
        </div>
    </nav>
    </div>
    </form>
@endsection

</html>
