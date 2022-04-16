@extends('layouts.adminbase')
 
@section('title', 'Add Category')
  

@section('content')
     
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center">Add Category</h3>
                            <div class="card-body">
                                Create Category
                                </div>
                            
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Category Element</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role = "form" action = "/admin/category/store" method = "post">
                                        @csrf
                                            <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" name = "title" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Keywords</label>
                                                <input type="text" class="form-control" name = "keywords" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Description</label>
                                                <input type="text" class="form-control" name = "description" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Image</label>
                                                <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
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
                                                <select class="form-control" name = "status">
                                                <option>Enable</option>
                                                <option>Disable</option>
                                                </select>
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

@section('foot')
     <p>This is my body foot area.</p>
     
     <div class="card-footer">Footer</div>
      
@endsection
