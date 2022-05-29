<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <style>
        .content--notification {
            margin: 1em;
            padding : 1em;
            background-color: #16C827;
            border-radius : 10px;
        }

        .content--notification .content--notification_image {
            display: flex;
            justify-content: end;
        }

        .content--menu_profile {
            margin: 1em;
            padding : 1em;
            background-color: #16C827;
            border-radius : 10px;
        }

        .content--menu_profile .row {
            display :flex;
            justify-content: center;
        }
        .content--menu_profile p {
            display :flex;
            justify-content: center;
        }

        .content--menu_order {
            margin: 1em;
            padding: 1em;
            background-color: #16C827;
            border-radius:10px;
        }

        .content--menu_order .row{
            display :flex;
            justify-content: center;
        }

        .content--menu_order p{
            display :flex;
            justify-content: center;
        }

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

        nav {
            background-color: #16C827;
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
        }

        .image--placeholder{
            height: 100px;
            width: 100px;
            background-color: black;
        }

    </style>


</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar sticky-top navbar-expand-lg text-light">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="#">TRASHURE</a>
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#">Profil Bank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Daftar Pesanan</a>
                </li>
                <li class="dropdown-center">
                    <a class="navbar-brand ms-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="iconify" data-icon="ic:round-account-circle"></span>
                    </a>
                    {{-- dropdown --}}
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>

                </li>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
