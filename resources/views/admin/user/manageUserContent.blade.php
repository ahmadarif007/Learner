@extends('admin.adminMaster')

@section('title')
Manage | User
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Manage User Information 
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover text-center" id="dataTables-example">
                    <thead>
                        <tr style="color: green">
                            <th style="text-align: center">#</th>
                            <th style="text-align: center">Name</th>
                            <th style="text-align: center">E-mail</th>
                            <th style="text-align: center">Username</th>
                            <!-- <th style="text-align: center">Picture</th> -->
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="odd gradeX">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->username}}</td><!-- 
                            <td><img src="{{asset($user->image)}}" alt="{{$user->name}}" height="100" width="100"></td> -->

                            <td class="center">
                    <?php
                        $roleId = Session::get('roleId');
                            if (in_array($roleId, [1, 2, 3, 4] )) { ?>
                                <a href="{{url('/view/userInfo/'.$user->id)}}" class="btn btn-success" title="User Details View">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>

                                <?php } if (in_array($roleId, [1, 2, 3] )) { ?>
                                <a href="{{url('/edit/userInfo/'.$user->id)}}" class="btn btn-info" title="Edit Product">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <?php } if (in_array($roleId, [1] )) { ?>
                                <a href="{{url('/delete/userInfo/'.$user->id)}}" class="btn btn-danger" title="Delete Product" onclick="return check_delete_status();">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                    <?php } ?>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<hr>



@endsection