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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{url('/css/admin.css')}}">
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ url('/css/pengguna.css') }}">


    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg text-light">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="/home">TRASHURE</a>
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Bank Sampah</a>
                </li>
                <li class="dropdown-center">
                    <a class="navbar-brand ms-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="iconify" data-icon="ic:round-account-circle"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
        </div>
    </nav>
    <div class="container super">
        @yield('content')
    @show
</div>
</body>

</html>
