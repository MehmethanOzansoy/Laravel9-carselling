@extends('layouts.frontbase')


@section('title', ' User Panel')


@section('content')

<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Panel</a></li>
        </ul>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
                    <div class="col-md-2">
                        <div class="section-title">
                            <h3 class="title">User Menu</h3>
                        </div>
                        @include('home.user.usermenu')

                    </div>

                    <div class="col-md-10">
                        <div class="shiping-methods">
                            <div class="section-title">
                                <h4 class="title">User Profile</h4>

                                <div class="input-checkbox">
                                    @include('profile.show')

                                </div>

                    </div>
        </div>
    </div>  

</div>
    

@endsection