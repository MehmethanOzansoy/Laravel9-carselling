@extends('layouts.adminwindow')

@section('title', 'Car Image Gallery')

@section('content')

<h3>{{$car->title}}</h3>
<hr>
<form role="form" action="{{route('admin.image.store',['cid'=>$car->id] )}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-body">

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
      <label class="custom-file-label" for="exampleInputFile">Choose image</label>
    </div>
    <div class="input-group-append">
      <input class="input-group-text" type="submit" value="Upload">
    </div>
  </div>
</form>

<div class="card">
  <div class="card-header">
    <h3 class="cart-title">Car Image List</h3>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">Id</th>
          <th>Title</th>
          <th>Image</th>
          <th style="width: 40px">Update</th>
          <th style="width: 40px">delete</th>
        </tr>
      <tbody>

        @foreach( $images as $rs)
        <tr>
          <td>{{$rs->id}}</td>
          <td>{{$rs->title}}</td>
          <td>
            @if ($rs->image)
            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
            @endif

          </td>

          <td><img src="{{asset('assets')}}/admin/assets/images/Gallery.png" style="height: 40px"></td>
          <td>{{$rs->status}}</td>
          <td><a href="{{route('admin.car.edit',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Update</a></td>
          <td><a href="{{route('admin.car.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>
        </tr>
        @endforeach
        </thead>
    </table>
  </div>
</div>

<!-- /.card-body -->


<a href="{{route('admin.car.create')}}" class="btn btn-block btn-info">Add Image</a>

@endsection