<!DOCTYPE html>
<html lang="id">
    <head>
        @include('layouts.head')
        <title>@yield('title')</title>
        @laravelPWA
        @yield('css')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    <body class="sb-nav-fixed">

            <nav class="sb-topnav navbar navbar-expand">
                <a class="navbar-brand" href="{{ route('home.admin') }}">SMKN 1 CIBADAK</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="bi bi-list"></i></button>
                <!-- Navbar Search-->
                <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

                </div>
                <!-- Navbar-->
                <ul class="navbar-nav ml-auto ml-md-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                    @endauth
                </ul>
            </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-white text-center mb-5">
                                <!-- Menampilkan Jam Aktif -->
                                <div id="clock" style="font-weight: 600"></div>
                                <script type="text/javascript">
                                <!--
                                function showTime() {
                                    var a_p = "";
                                    var today = new Date();
                                    var curr_hour = today.getHours();
                                    var curr_minute = today.getMinutes();
                                    var curr_second = today.getSeconds();
                                    if (curr_hour < 12) {
                                        a_p = "AM";
                                    } else {
                                        a_p = "PM";
                                    }
                                    if (curr_hour == 0) {
                                        curr_hour = 12;
                                    }
                                    if (curr_hour > 12) {
                                        curr_hour = curr_hour - 12;
                                    }
                                    curr_hour = checkTime(curr_hour);
                                    curr_minute = checkTime(curr_minute);
                                    curr_second = checkTime(curr_second);
                                document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                                    }

                                function checkTime(i) {
                                    if (i < 10) {
                                        i = "0" + i;
                                    }
                                    return i;
                                }
                                setInterval(showTime, 500);
                                //-->
                                </script>

                                <!-- Menampilkan Hari, Bulan dan Tahun -->
                                <span style="font-weight: 400;">
                                    <script type='text/javascript'>
                                        <!--
                                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                        var date = new Date();
                                        var day = date.getDate();
                                        var month = date.getMonth();
                                        var thisDay = date.getDay(),
                                            thisDay = myDays[thisDay];
                                        var yy = date.getYear();
                                        var year = (yy < 1000) ? yy + 1900 : yy;
                                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                        //-->
                                    </script>
                                </span>
                            </div>
                            @yield('menu')

                        </div>
                    </div>
                    <div class="sb-sidenav-footer bg-info d-flex">
                        <a class="logout d-block w-100" href="{{ route('logout.admin') }}">
                            <div class="sb-nav-link-icon float-left pr-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 16V17C13 17.7956 12.6839 18.5587 12.1213 19.1213C11.5587 19.6839 10.7956 20 10 20H6C5.20435 20 4.44129 19.6839 3.87868 19.1213C3.31607 18.5587 3 17.7956 3 17V7C3 6.20435 3.31607 5.44129 3.87868 4.87868C4.44129 4.31607 5.20435 4 6 4H10C10.7956 4 11.5587 4.31607 12.1213 4.87868C12.6839 5.44129 13 6.20435 13 7V8M17 16L21 12L17 16ZM21 12L17 8L21 12ZM21 12H7H21Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            Logout
                        </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="mb-4">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SMKN 1 CIBADAK 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="{{ asset('/js/scripts.js') }}"></script>
        @yield('js')
    </body>
</html>
