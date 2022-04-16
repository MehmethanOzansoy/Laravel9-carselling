@extends('layouts.adminbase')
 
@section('title', 'Category List')
  

@section('content') 
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
                         <div class = "card">
                              <div class="card-header">
                                <h3 class="card-title">Category List</h3>
                                    <div class="col-sm-6">
                                        </div>
                                    </div>
                                  </div>
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <table class="table  table-success table-striped">
                                              <thead>
                                                <tr>
                                                  <th style="width: 10px">id</th>
                                                  <th>Title</th>
                                                  <th>Keywords</th>
                                                  <th>Descriiption</th>
                                                  <th>İmage</th>
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
                                                  <td>{{$rs->image}}</td>
                                                  <td>{{$rs->status}}</td>
                                                  <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-block btn-success btn-sm">Edit</a></td>
                                                  <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-block btn-danger btn-sm">Delete</a></td>
                                                  <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-block btn-warning btn-sm">Show</a></td>
                                                </tr>
                                              @endforeach
                                              </tbody>
                                            </table>
                                          </div>
                                            <!-- /.card-body -->
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
                                </div>
                            </div>
                        </div>

@endsection

@section('foot')
     <p>This is my body foot area.</p>
    
@endsection
