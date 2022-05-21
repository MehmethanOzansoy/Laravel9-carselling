@extends('layouts.adminbase')

@section('title', 'Add Car')

@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection()

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Add Car</h3>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add Car</li>
                    </ol>

                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Car Element</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.car.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent Car</label>

                                <select class="form-control select2" name="category_id">
                                    @foreach($data as $rs)
                                    <option value="{{ $rs->id }}">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand</label>
                                <input type="text" class="form-control" name="brand" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Modal</label>
                                <input type="text" class="form-control" name="modal" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Year</label>
                                <input type="integer" class="form-control" name="year">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fuel</label>
                                <input type="text" class="form-control" name="fuel" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gear</label>
                                <input type="text" class="form-control" name="gear" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Motor Power</label>
                                <input type="text" class="form-control" name="motor_power" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">KM</label>
                                <input type="text" class="form-control" name="km" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail Info</label>
                                <textarea class="form-control" id="detail" name="detail">
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

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="card-footer">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option>Enable</option>
                                                    <option>Disable</option>
                                            </div>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection