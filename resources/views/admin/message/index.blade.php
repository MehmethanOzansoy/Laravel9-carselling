@extends('layouts.adminbase')

@section('title', ' Contact Form Message List')

@section('content')
<div class="table-responsive">          
    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-6">
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float">
              <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Message List</li>
            </ol>

          </div>
          <div class="Messaged-body">
            <table class="table table-bordered">
              <tr>
                <th style="width: 10px">Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Status</th>
                <th style="width: 40px">Delete</th>
                <th style="width: 40px">Show</th>
              </tr>
              <tbody>

                @foreach( $data as $rs)
                <tr>
                  <td>{{$rs->id}}</td>
                  <td>{{$rs->name}}</td>
                  <td>{{$rs->phone}}</td>
                  <td>{{$rs->email}}</td>
                  <td>{{$rs->subject}}</td>
                  <td>{{$rs->status}}</td>

                  <td>
                    <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm" 
                        onclick="return !window.open(this.href,' ','top=50 left=100 width=1100,height=700')">
                        Show
                    </a>

                  
                  </td>
              
                  <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>
                  
                </tr>
                @endforeach
              </tbody>
          </div>
        </div>


        <!-- /.Messaged-body -->

      </div>
    </div>
</table>


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