@extends('layouts.frontbase')


@section('title', ' References | '. $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">

            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">References</li>

        </ul>
    </div>
</div>

<div class="section">

    <div class="container">
        <div class="row">
            <h1>About Us</h1>
            <div class="col-md-12">
                {!! $setting->references !!}

            </div>
            

        </div>
    </div>
</div>


@endsection