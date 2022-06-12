@extends('layouts.frontbase')


@section('title', ' User Comments & Reviews')


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
                        <h4 class="title">User Comments & Reviews</h4>

                        <div class="input-checkbox">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Car</th>
                                        <th>Subject</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $comments as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a href="{{route('car',['id'=>$rs->car_id])}}">
                                                <div class="link" .link { color:aqua; text-decoration: none; background-color: none; }>{{$rs->car->title}}</div>
                                            </a></td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>


                                        <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>

        </div>


        @endsection