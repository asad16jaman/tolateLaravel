@extends('layout.base')

@section('title')
Login Page
@endsection



@section('content')
@include('front.nav')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3 shadow">
                <div class="card-header">
                    <h3 class="card-title text-center">Sign In</h3>
                </div>
                <div class="card-body">
                    @session('error')
                        <div class="alert alert-warning alert-dismissible fade show">{{ $value }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endsession
                    @session('success')
                        <div class="alert alert-success alert-dismissible fade show">{{ $value }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endsession

                    <form action="{{ route('session')}}" method="post">
                        @csrf



                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name='email' class="form-control @error('email') is-invalid @enderror"
                                placeholder="enter Email" aria-label="Email" value='{{ old('email') }}'>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name='password' placeholder="password" class="form-control"
                                aria-label="Password">

                        </div>

                        <div class="form-check form-switch d-flex align-items-center ">
                                        <input class="form-check-input" type="checkbox" value='true' name="remembar" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                    </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <p class="text-sm mt-3 mb-0">Dont have any account?
                        <a href="{{ route('register')}}" class="text-dark font-weight-bolder">Sign up
                        </a>
                    </p>
                </div>
                <div class="card-footer">
                    
                    <p class="text-sm text-center mt-3">
                                        Forgot your password? Reset your password
                                        <a href="{{ route('password.request')}}"
                                            class="text-primary text-gradient font-weight-bold">here</a>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front.footer')
@endsection