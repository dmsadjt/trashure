@extends('layouts.layout')
@section('content')

{{-- <style>
    .container {
        margin-right: 300px;
        padding-top: 20px;
        padding-left: 40px;
        width: 25%;
        float: left;

    }

    .fa-search {
        color: #777;
        position: absolute;
        top: 31px;
        padding-left: 5px
    }

    .btn-primary {
        position: absolute;
        top: 2;
        right: 0;
        margin-right: 10px;
    }

</style> --}}

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <input class="form-control" id="myInput" type="text" placeholder="   Search..">
                <span>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </span>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>


        <br>
    </div>


    <table class="table table-bordered table-striped">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">PHONE NUMBER</th>
                <th scope="col">BALANCE</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>admin123</td>
                <td>08501515</td>
                <td>0</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>aku123</td>
                <td>065659</td>
                <td>5</td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>lu123</td>
                <td>0854848</td>
                <td>10</td>
                <td>90</td>

            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>wow123</td>
                <td>0959</td>
                <td>12</td>
                <td>90</td>

            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>eee123</td>
                <td>989565</td>
                <td>25</td>
                <td>90</td>

            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>ahahah123</td>
                <td>08956</td>
                <td>90</td>
                <td>90</td>

            </tr>
            <tr>
                <th scope="row">7</th>
                <td>CAMAY</td>
                <td>@CAMAAY</td>
                <td>lolo123</td>
                <td>61689</td>
                <td>25</td>
                <td>90</td>

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

</body>
@endsection
</html>
