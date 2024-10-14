@extends('layout.base')

@section('title')
    notice page
@endsection

@section('content')
    <h1>please check your email and verify your email</h1>
    <a href="{{ route('verification.send')}}" class="btn btn-warning">Resent</a>
@endsection