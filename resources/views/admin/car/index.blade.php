@extends('layouts.adminbase')

@section('title', 'Car List')


@section('content')
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-6">
      </div>
      <div class="col-sm-12">
        <ol class="breadcrumb float">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Car List</li>
        </ol>

      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <tr>
              <th style="width: 10px">Id</th>
              <th>Category</th>
              <th>Title</th>
              <th>Price</th>
              <th>Brand</th>
              <th>Modal</th>
              <th>Year</th>
              <th>Fuel</th>
              <th>Gear</th>
              <th>KM</th>
              <th>Motor Power</th>
              <th>detail</th>
              <th>Image</th>
              <th>Status</th>
              <th style="width: 40px">Edit</th>
              <th style="width: 40px">Delete</th>
              <th style="width: 40px">Show</th>
            </tr>
          <tbody>

            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}</td>
              <td>{{$rs->title}}</td>
              <td>{{$rs->price}}</td>
              <td>{{$rs->brand}}</td>
              <td>{{$rs->modal}}</td>
              <td>{{$rs->year}}</td>
              <td>{{$rs->fuel}}</td>
              <td>{{$rs->gear}}</td>
              <td>{{$rs->KM}}</td>
              <td>{{$rs->motor_power}}</td>
              <td>{{$rs->detail}}</td>
              <td>
                @if ($rs->image)
                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                @endif

              </td>
              <td>{{$rs->status}}</td>
              <td><a href="{{route('admin.car.edit',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Edit</a></td>
              <td><a href="{{route('admin.car.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>
              <td><a href="{{route('admin.car.show',['id'=>$rs->id])}}" class="btn btn-block btn-warning btn-sm">Show</a></td>
            </tr>
            @endforeach
          </tbody>
      </div>
      </table>
    </div>


    <!-- /.card-body -->

  </div>
  <a href="{{route('admin.car.create')}}" class="btn btn-block btn-info" style="width: 200px">Add Category</a>
</div>
<div class="bg-info clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>

@endsection


@section('foot')

@endsection