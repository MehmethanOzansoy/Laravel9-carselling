@extends('layouts.frontbase')


@section('title', ' User Register | ')

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">

            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Register</li>

        </ul>
    </div>
</div>

<div class="section">

    <div class="container">
        <div class="row">
            <h1>Login Page</h1>
            <div class="col-md-12">
                @include('auth.register')

            </div>
            

        </div>
    </div>
</div>


@endsection