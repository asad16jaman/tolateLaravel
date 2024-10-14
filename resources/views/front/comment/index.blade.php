@extends('front.layout.layout')
@section('title')
    threed page
@endsection

@section('style')
<style>

.jumbotron{
            background: #80808045;
            /* padding: 67px 26px; */
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .media{
            display:flex;
        }
        .media-body{
            flex-grow: 1;
            flex-shrink: 10;
            padding-left:10px;
        }
</style>

@endsection


@section('content')


    <div class="container">
        <div class="row mt-1 mb-3">
            <div class="col-md-8">
                <div class="jumbotron">
                    <h3 class="">Problame title</h3>
                    <p class="lead"> problame description </p>
                    <hr>
                    <p class="lead">
                        created by : Asad
                    </p>
                </div>
                <div>
                @auth
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="img-thumbnail p-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sollution Discription</label>
                        <textarea name="discription" placeholder="write sollution hare" id="" cols="10" rows="5"
                            class="form-control"></textarea>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </form>
                @else
                <div class="alert alert-success d-flex justify-content-between">
                        Want to answer? You need to logged in
                        <a href="{{ route('login')}}" class="btn btn-primary">Login</a>
                        </div>

                @endauth

                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        <h1>Forums Rules</h1>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or
                        hate speech.
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Keep it clean. Don't post anything
                        obscene or sexually explicit.</a>
                    <a href="#" class="list-group-item list-group-item-action">Respect each other. Don't harass or grief
                        anyone, impersonate people, or expose their private information.</a>
                    <a href="#" class="list-group-item list-group-item-action">Respect our forum.</a>

                </div>
            </div>

        </div>

        <div class="row mt-1 bg-light px-5 py-3">
            <div class="media">
                <img class="mr-3" src="{{ asset('/assets/img/profile.png')}}" width="50px" alt="image">
                <div class="media-body">
                    <div class="d-flex justify-content-between">
                    <p>'it islsl'  </p>
                    <span class="mx-5">time: '11 sep 2024'</span>
                    </div>
                   comdldld
                </div>
            </div>
            </div>
    </div>
       

@endsection