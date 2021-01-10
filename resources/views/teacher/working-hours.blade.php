@extends('layouts.app')

@section('title') Detail Jam Kerja - SMKN 1 CIBADAK @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/working-hours.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="title text-center" style="margin-top: 90px;">JAM KERJA SMKN 1 CIBADAK</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="line mt-3"></div>
        </div>
    </div>

    <div class="row">
        <div class="ccl-md-12 col-sm-12">
            <!-- Jika ada data -->
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col">KETRANGAN</th>
                            <th scope="col">JAM MULAI</th>
                            <th scope="col">JAM SELESAI</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row" class="num text-center">1</th>
                                <td>Jam Masuk</td>
                                @foreach ($starts as $start)
                                    <td>{{ $start->hours_start }}</td>
                                    <td>{{ $start->hours_over }}</td>
                                @endforeach
                            </tr>
                        <tr>
                            <th scope="row" class="num text-center">2</th>
                            <td>Jam Pulang</td>
                            @foreach ($overs as $over)
                                <td>{{ $over->hours_start }}</td>
                                <td>{{ $over->hours_over }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="line mt-3"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <span class="font-weight-bold font-italic" style="font-family: Open Sans;">*Keterangan: </span> <span class="font-italic" style="font-family: Open Sans;">Di harapkan melakukan Absensi pada rentang waktu yang sudah ditentukan. Dan melakukan <b>Log Out</b> setelah seteiap melakukan Absensi.</span>
        </div>
    </div>
@endsection
