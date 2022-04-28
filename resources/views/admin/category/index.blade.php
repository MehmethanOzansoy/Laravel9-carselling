@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Category List</li>
        </ol>

      </div>
      <div class="card-body">
        <table class="table  table-success table-striped">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Title</th>
              <th>Keywords</th>
              <th>Description</th>
              <th>Image</th>
              <th>Status</th>
              <th style="width: 40px">Edit</th>
              <th style="width: 40px">Delete</th>
              <th style="width: 40px">Show</th>
            </tr>
          </thead>
          <tbody>

            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{$rs->title}}</td>
              <td>{{$rs->keywords}}</td>
              <td>{{$rs->description}}</td>
              <td>
                @if ($rs->image)
                <img src ="{{Storage::url($rs->image)}}" style="height: 40px">
                @endif
              
              </td>
              <td>{{$rs->status}}</td>
              <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Edit</a></td>
              <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>
              <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-block btn-warning btn-sm">Show</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
      <!-- /.card-body -->
      <div class="col">

        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>

      </div>

    </div>
    <a href="{{route('admin.category.create')}}" class="btn btn-block btn-info" style="width: 200px">Add Category</a>
  </div>

  @endsection

  @section('foot')
  <p>This is my body foot area.</p>

  @endsection