@extends('layout.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<style>
    body {
        color: #FBBE81;
    }

    .btn-purple {
        background: #FBBE81;
        width: 100%;
        color: #fff;
    }

    .btn-purple:hover {
        background: #FBBE81;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }
</style>
@endsection

@section('title', 'register page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="cold-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-0 mt-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf 
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="NIK" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Full Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" nama="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" nama="telp" placeholder="Phone Number" class="form-control">
                        </div>
                        <button type="submit" class="btn-purple">Submit</button>
                    </form>
                </div>
            </div>
            @if(Session:has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session:get('pesan') }}
                </div>
            @endif
            <a href="{{ route('ereporthub.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Back To Home</a>
        </div>
    </div>
</div>

@endsection