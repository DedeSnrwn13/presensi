@extends('layouts.app')

@section('title')
    Hompage - Absen SMKN 1 CIBADAK
@endsection

@section('content')
<div class="row" >
    <div class="col-md-4 offset"></div>
    <div class="col-md-4 text-center" style="margin-top: 220px;">
        <h1 class="text-uppercase" style="font-family: Open Sans; font-style: normal; font-weight: bold; font-size: 24px; line-height: 24px; color: #28ABB9;">selamat datang</h1>
        <span class="mt-1 mb-4 d-block" style="font-family: Open Sans; font-style: normal; font-weight: normal; font-size: 16px; line-height: 20px; color: #808080;">Mari melakukan absen</span>
        <a href="{{ route('login.teacher') }}" class="btn btn-info" style="font-family: Open Sans; font-style: normal; font-weight: 600; font-size: 20px; line-height: 27px; color: #FFFFFF;">Mulai Sekarang</a>
        <a href="{{ url('/details-of-working-hours') }}" class="btn btn-outline-info mt-3" style="font-family: Open Sans; font-style: normal; font-size: 15px;">Lihat Deatil Jam Kerja</a>
    </div>
    <div class="col-md-4 offset"></div>
</div>
@endsection

