<!DOCTYPE html>
<html lang="id">
    <head>
        @include('layouts.head')
        <title>@yield('title')</title>
        @laravelPWA
        @yield('css')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">
        <!-- As a link -->
        <nav class="sb-topnav navbar navbar-expand bg-info navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/teacher/checkin') }}">SMKN 1 CIBADAK</a>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ml-md-0">
                        <!-- Authentication Links -->
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi bi-border-width"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout.teacher') }}">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @yield('js')
    </body>
</html>
