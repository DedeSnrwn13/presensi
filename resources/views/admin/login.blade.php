@extends('layouts.app')

@section('title')
    Log In - Admin
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="row d-flex justify-content-center" >
        <div class="col-md-4 offset"></div>
        <div class="col-md-4" style="margin-top: 160px;">
            @if (session()->get('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-md-12 text-center mb-3">
                <span class="title"><b>LOGIN</b> ADMIN</span>
            </div>
            <form action="/login/attendance/smk/admin" method="POST">
                @csrf

                <div class="form-group col-md-12">
                    <label for="formGroupEmail">E-mail:</label>
                    <div class="d-flex align-items-center">
                        <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="formGroupEmail" placeholder="example@email.com">
                    </div>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label for="formGroupPassword">Kata Sandi:</label>
                    <div class="d-flex align-items-center">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="formGroupPassword" placeholder="Kata Sandi">
                        <i class="bi bi-eye-fill" onclick="myFunction()" style="position: absolute; right: 0; margin-right: 25px; cursor: pointer;"></i>
                    </div>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info w-100">Masuk</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 offset"></div>
    </div>
@endsection

@section('js')
    <script>
        function myFunction() {
            var pw1 = document.getElementById("formGroupPassword");

            if (pw1.type === "password") {
                pw1.type = "text";
            } else {
                pw1.type = "password";
            }
        }
    </script>
@endsection
