@extends('layouts.adminbase')

@section('title', 'Show Car: '.$data->title)


@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Show Car</li>
                    </ol>

                </div>

                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Category</th>
                                    <td>{{$data->category_id}}</td>
                                </tr>

                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>

                                <tr>
                                    <th>Keyword</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{$data->price}}</td>
                                </tr>
                                <tr>
                                    <th>Modal</th>
                                    <td>{{$data->modal}}</td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>{{$data->year}}</td>
                                </tr>
                                <tr>
                                    <th>Fuel</th>
                                    <td>{{$data->fuel}}</td>
                                </tr>
                                <tr>
                                    <th>Gear</th>
                                    <td>{{$data->gear}}</td>
                                </tr>
                                <tr>
                                    <th>Motor Power</th>
                                    <td>{{$data->motor_power}}</td>
                                </tr>
                                <tr>
                                    <th>Detail Info</th>
                                    <td>{{$data->detail}}</td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if ($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>

                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>

                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>
                <div class="row">

                    <div class="col-sm-1">
                        <a href="{{route('admin.car.edit',['id'=>$data->id])}}" class="btn btn-block btn-info" style="width: 100px">Edit</a>
                    </div>
                    <div class="col-sm-1">
                        <a href="{{route('admin.car.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleted !!! Are u sure ')" class="btn btn-block btn-danger" style="width: 100px">Delete</a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection

