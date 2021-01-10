@extends('layouts.app-two')

@section('title')
    Lihat Laporan - Guru
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/details-attendance.css') }}">
@endsection

@section('content')
<h1 class="title" style="margin-top: 90px;">Detail Absen</h1>

<div class="line"></div>

<a href="/teacher/checkin" class="btn btn-outline-info mt-2">
    <i class="bi bi-arrow-left"></i>
    KEMBALI
</a>


<!-- Jika ada data -->
<div class="card mt-3">
    <div class="card-header">
        <div class="row d-flex align-items-center" id="profileReport">
            <div class="col-md-2">
                @if($user->teacher->avatar==null)
                    <img src="{{  asset('images/default.png') }}" id="imgView" class="card-img-top img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: center; border-radius: 4px;">
                @else
                    <img src="{{ asset('storage/'. Auth::user()->teacher->avatar) }}" id="imgView" class="card-img-top img-fluid" style="width: 180px; height: 180px; object-fit: cover; object-position: center; background-size: cover; border-radius: 4px;">
                @endif
            </div>
            <div class="col-md-10 ">
                <div class="row mb-2">
                    <span class="col-md-3 key">NAMA</span>
                    <span class="col-md-1 tikwa d-flex justify-content-center">:</span>
                    <span class="col-md-8 value">{{ $user->teacher->name }}</span>
                </div>
                <div class="row mt-2">
                    <span class="col-md-3 key">UJI KOMPETENSI</span>
                    <span class="col-md-1 tikwa d-flex justify-content-center">:</span>
                    <span class="col-md-8 value">{{ $user->teacher->major }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($data_absen->count())
        <div class="table-responsive overflow-auto">
            <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">TANGGAL</th>
                                    <th scope="col">JAM MASUK</th>
                                    <th scope="col">JAM PULANG</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data_absen as $absen)
                                <tr>
                                    <th scope="row" class="num text-center">{{ $no }}</th>
                                    <td>{{ date('d F Y', strtotime($absen->date)) }}</td>
                                    <td class="text-white"><span class="bg-info px-2 py-1">{{ $absen->time_in }}</span></td>
                                    <td class="text-white"><span class="bg-info px-2 py-1">{{ $absen->time_out }}</span></td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data_absen->links() }}
                        @else
                        <div class="row py-5">
                            <div class="col-sm-4 px-0 offest"></div>
                            <div class="col-sm-4 px-0 text-center">
                                <div class="d-flex justify-content-center mb-3">
                                    <i class="bi bi-question" style="font-size: 80px;"></i>
                                </div>
                                <span>Tidak ada data apapaun.</span>
                            </div>
                            <div class="col-sm-4 px-0 offest"></div>
                        </div>
                        @endif
            </div>
        </div>
    </div>
@endsection
