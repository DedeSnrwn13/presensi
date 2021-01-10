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
                <a class="navbar-brand text-white" href="{{ route('/') }}">SMKN 1 CIBADAK</a>
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

