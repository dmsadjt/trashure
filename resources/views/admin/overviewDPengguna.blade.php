@extends('layouts.layout')
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
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>

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
                    <button type="button" class="btn btn-primary">+ Add Bank Sampah</button>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011-07-25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009-01-12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012-03-29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008-11-28</td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012-12-02</td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012-08-06</td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010-10-14</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009-09-15</td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008-12-13</td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008-12-19</td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013-03-03</td>
                    <td>$342,000</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008-10-16</td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012-12-18</td>
                    <td>$313,500</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010-03-17</td>
                    <td>$385,750</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012-11-27</td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010-06-09</td>
                    <td>$725,000</td>
                </tr>
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
                searching : false,
                ordering : false,
                lengthMenu : [[5, 10, 15, 25, 50, -1 ], [5, 10, 15, 25, 50, "All"]]

            })
        </script>

    </body>
@endsection
</html>



