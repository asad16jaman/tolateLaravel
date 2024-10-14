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
                    

                    <form action="{{ route('password.email')}}" method="post">
                        @csrf



                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name='email' class="form-control @error('email') is-invalid @enderror"
                                placeholder="inter Email" aria-label="Email" value='{{ old('email') }}'>
                                @error("email")
                                    <p class="text-danger">{{$message}}</p>

                                @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">send</button>
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