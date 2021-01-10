@extends('layouts.app-two')

@section('title')
    Check In - Guru
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/checkin.css') }}">
@endsection

@section('content')
    @if (session('success'))
        {{-- <div id="closed"></div> --}}
        <div class="popup-wrapper" id="popup1">
            <div class="popup-container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <img src="{{ asset('images/icon-check.png') }}" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1 class="text-uppercase berhasil">{{ session('success') }}</h1>
                    </div>
                    <div class="col-md-12 text-center">
                        <span class="desk">Terimakasih anda telah melakukan absen masuk</span>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 offset"></div>
                            <div class="col-md-6">
                                <a href="{{ url('/teacher/checkin') }}" class="btn btn-outline-secondary tutup w-100 py-3">Tutup</a>
                            </div>
                            <div class="col-md-3 offset"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('successOut'))
        {{-- <div id="closed"></div> --}}
        <div class="popup-wrapper" id="popup2">
            <div class="popup-container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">

                        <img src="{{ asset('images/icon-check.png') }}" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1 class="text-uppercase berhasil">{{ session('successOut') }}</h1>
                    </div>
                    <div class="col-md-12 text-center">
                        <span class="desk">Terimakasih anda telah melakukan absen pulang</span>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 offset"></div>
                            <div class="col-md-6">
                                <a href="{{ url('/teacher/checkin') }}" class="btn btn-outline-secondary tutup w-100 py-3">Tutup</a>
                            </div>
                            <div class="col-md-3 offset"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row d-flex justify-content-center">
        <div class="col-md-4 offset"></div>
        <div class="col-md-4 text-center" style="margin-top: 50px;">
            <span class="col-md-12 text-center bg-info text-white py-1">{{ $info['status'] }}</span>
            <div class="col-md-12 d-flex justify-content-center mt-4">
                @if($user->teacher->avatar==null)
                    <img src="{{  asset('images/default.png') }}" id="imgView" class="card-img-top img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: center; border-radius: 4px;">
                @else
                    <img src="{{ asset('storage/'. Auth::user()->teacher->avatar) }}" id="imgView" class="card-img-top img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: center; border-radius: 4px;">
                @endif
            </div>
            <div class="col-md-12 text-center">
                <h1 class="nama">{{ $user->teacher->name }}</h1>
            </div>
            <div class="col-md-12">
                <span class="role">{{ $user->teacher->major }} /  {{ $user->teacher->subjects }}</span>
            </div>
            <div class="col-md-12" style="margin-top: 14px;">
                <!-- Menampilkan Jam (Aktif) -->

                <span class="time" id="clock">07:23 WIB</span>
                <span class="tanggal">|
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
            <div class="col-md-12">
                <form action="{{ url('teacher/attendance') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-6 mt-4">
                            <button type="submit" name="btnIn" class="btn btn-info w-100 text-uppercase check" {{ $info['btnIn'] }}>Absen Masuk</button>
                        </div>
                        <div class="col-md-6 mt-4">
                            <button type="submit" name="btnOut" class="btn btn-info w-100 text-uppercase check" {{ $info['btnOut'] }}>Absen Pulang</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 offset"></div>
                    <div class="col-md-6">
                        <a href="{{ url('/teacher/report-attendance') }}" class="btn btn-outline-info w-100" id="view">Lihat Laporan</a>
                    </div>
                    <div class="col-md-3 offset"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 offset"></div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    // <!--
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
@endsection
