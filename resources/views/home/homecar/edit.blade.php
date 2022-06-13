@extends('layouts.frontbase')

@section('title', 'Edit Car '.$data->title)

@section('head')

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h1 class="text-left">Edit Car {{$data->title}}</h1>
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card bg-info text-white">
                            <h3 class="card-title">Car</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                <li class="breadcrumb-item active">Edit Car</li>
                            </ol>

                        </div>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('admin.car.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Parent Car</label>

                                    <select class="form-control select2" name="category_id">
                                        @foreach($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if ($rs->id == $data-> category_id) selected="selected" @endif >
                                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}
                                        </option>
                                        @endforeach
                                    </select>


                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keywords</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="text" class="form-control" name="price" value="{{$data->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brand</label>
                                        <input type="text" class="form-control" name="brand" value="{{$data->brand}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Modal</label>
                                        <input type="text" class="form-control" name="modal" value="{{$data->modal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Year</label>
                                        <input type="integer" class="form-control" name="year" value="{{$data->year}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fuel</label>
                                        <input type="text" class="form-control" name="fuel" value="{{$data->fuel}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gear</label>
                                        <input type="text" class="form-control" name="gear" value="{{$data->gear}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Motor Power</label>
                                        <input type="text" class="form-control" name="motor_power" value="{{$data->motor_power}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">KM</label>
                                        <input type="text" class="form-control" name="km" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Detail Info</label>
                                        <textarea class="form-control" id="detail" name="detail">
                                "{!! $data->detail !!}"
                                </textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#detail'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Browser</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="col-xl-0 col-lg-0 col-md-0 col-sm-6 col-0">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>Enable</option>
                                                    <option>Disable</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection

    @section('foot')


    @endsection()