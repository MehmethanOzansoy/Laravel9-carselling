@extends('layouts.adminwindow')

@section('title', 'Car Image Gallery')

@section('content')

<h3>{{$car->title}}</h3>
<hr>
<form role="form" action="{{route('admin.image.store',['cid'=>$car->id])}}" method="post" enctype="multipart/form-data">
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
            <img src="{{Storage::url($rs->image)}}" style="height: 80px">
            @endif

          </td>
          <td><a href="{{route('admin.image.update',['cid'=>$car->id,'id'=>$rs->id])}}" class="btn btn-block btn-success">Update</a></td>
          <td><a href="{{route('admin.image.destroy',['cid'=>$car->id,'id'=>$rs->id])}}" class="btn btn-block btn-danger " onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>
        </tr>
        @endforeach
        </thead>
    </table>
  </div>
</div>


@endsection