@extends('layouts.adminbase')

@section('title', ' User List')

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
            <li class="breadcrumb-item active">User List</li>
          </ol>

        </div>
        <table class="table table-borderless">
          <thead>
            <tr>
                <th style="width: 10px">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th style="width: 40px">Delete</th>
                <th style="width: 40px">Show</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $data as $rs)
            <tr>
                  <th scope="row">{{$rs->id}}</th>
                  <td>{{$rs->name}}</td>
                  <td>{{$rs->email}}</td>
                  <td>
                    @foreach($rs->roles as $role)

                         {{$role->name}}

                    @endforeach
                  </td>
                  <td>{{$rs->status}}</td>
                  <td>
                    <a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm" 
                        onclick="return !window.open(this.href,' ','top=50 left=100 width=1100,height=700')">
                        Show
                    </a>

                  
                  </td>
              
                  <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleted !!! Are u sure ')">Delete</a></td>
                  
                </tr>
          @endforeach

            </tr>
           
          </tbody>
        </table>


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