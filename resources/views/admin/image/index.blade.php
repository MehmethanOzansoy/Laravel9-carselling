<div class="dashboard-wrapper">
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-6">
      </div>
      <div class="col-sm-12">
        <ol class="breadcrumb float">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Car Images List</li>
        </ol>

      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <tr>
              <th style="width: 10px">Id</th>
              <th>Title</th>
              <th>Image</th>
              <th>Status</th>
              <th style="width: 40px">Update</th>
              <th style="width: 40px">delete</th>
            </tr>
          <tbody>

            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}</td>
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

