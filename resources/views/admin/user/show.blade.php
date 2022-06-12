@extends('layouts.adminbase')

@section('title', 'User Detail ')


@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail User Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>

                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)

                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id ,'rid'=>$role->id  ])}}" 
                                                 onclick="return confirm('Deleted !!! Are u sure ')">[x]</a>

                                        @endforeach

                                    </td>
                                </tr>

                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>

                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>
                            <tr>
                                <th>Add Role to User</th>
                                <td>
                                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)

                                             <option value="{{$role->id}}">{{$role->name}}</option>

                                            @endforeach

                                        </select>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>


            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')
<p>This is my body foot area.</p>

<div class="card-footer">Footer</div>

@endsection