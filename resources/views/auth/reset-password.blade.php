@extends('layout.base')

@section('title')
forgate password page
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3 shadow">
                <div class="card-header">
                    <h3 class="card-title text-center">Password Reset</h3>
                </div>
                <div class="card-body">
                    @session('status')
                        <div class="alert alert-warning alert-dismissible fade show">{{ $value }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endsession
                    
                    <form action="{{ route('password.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name='email' class="form-control @error('email') is-invalid @enderror"
                                placeholder="inter Email" aria-label="Email" value='{{ old('email') }}'>
                                @error("email")
                                    <p class="text-danger">{{$message}}</p>

                                @enderror
                        </div>

                        <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name='password' placeholder="password" class="form-control @error('password') is-invalid @enderror"
                                            aria-label="Password">
                                            @error('password')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" name='password_confirmation' placeholder="confirm password" class="form-control"
                                            aria-label="Password">
                                    </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                    
                </div>
                <div class="card-footer">
                    
                    <p class="text-sm text-center mt-3">
                                       Remember Password? Go back
                                        <a href="{{ route('login')}}"
                                            class="text-primary text-gradient font-weight-bold">click hare</a>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection