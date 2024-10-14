@extends('layout.base')

@section('title')
    register Page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-3 shadow">
                    <div class="card-header">
                        <h3 class="card-title text-center">Register Yourself</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.store')}}" method="post">
                        @csrf 
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" aria-label="Name" placeholder="type your name" value='{{ old('name') }}'>
                                        @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" placeholder="inter Email" aria-label="Email" value='{{ old('email') }}'>
                                        @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
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

                                    <div class="form-check text-start mt-3">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" value="truea"
                                            id="flexCheckDefault" name="condition" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree the <a href=""
                                                class="text-dark font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Sign
                                    up</button>
                                    </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="text-sm mt-3 mb-0">Already have an account?
                                        <a href="{{ route('login')}}" class="text-dark font-weight-bolder">Sign in
                                        </a>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection