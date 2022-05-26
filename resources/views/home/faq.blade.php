@extends('layouts.frontbase')


@section('title', ' Frequently Asked Question | '. $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)

@section('head')
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">

            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Frequently Asked Question</li>

        </ul>
    </div>
</div>

<div class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Frequently Asked Question</h1>
                </div>

        <div id="accordion">
                @foreach($datalist as $rs)

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne {{$loop->iteration}}">
                                {{$rs->question}}
                            </a>
                        <div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                {!! $rs->answer !!}
                                </div>
                        </div>
                        
                    </div>
                    
                @endforeach
            </div>
        </div>
            

        </div>
    </div>
</div>


@endsection