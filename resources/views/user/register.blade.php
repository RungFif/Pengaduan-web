@extends('layout.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        body {
            background: #FBBE81
        }

        .btn-purple {
            background: #FBBE81;
            color:gold;
            border: 1px solid black;
            width: 100%
        }

        .btn-purple:hover {
            background: #ffc78f;
            color: #fff;
            border-color: #6a70fc;
            font-weight: 600;
        }
    </style>
@endsection

@section('title', 'Register Page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type= "number" name="nik" placeholder="Insert NIK Here..." class="form-control">
                        </div>
                        <div class="form-group">
                        <input type= "text" name="nama" placeholder="Insert Name Here..." class="form-control">
                        </div>
                        <div class="form-group">
                        <input type= "text" name="username" placeholder="Insert Username Here..." class="form-control">
                        </div>
                        <div class="form-group">
                        <input type= "password" name="password" placeholder="Insert Password Here..." class="form-control">
                        </div>
                        <div class="form-group">
                        <input type= "number" name="telp" placeholder="Insert Phone Number Here..." class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple">Register</button>
                    </form>
                </div>
            </div>
            @if(Session::has('pesan'))
            <div class="alert alert-danger mt-2">
                {( Session::get('pesan') )}
            </div>
            @endif
            <a href="{{ route('ereporthub.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Back To Home</a>
        </div>
    </div>
</div>

@endsection