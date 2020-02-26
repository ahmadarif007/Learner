@extends('admin.adminMaster')

@section('title')
User | Details View
@endsection

@section('adminContent')

<div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
    View User Details  
    <h3 class="text-center text-white">{{Session::get('message')}}</h3>
</div>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>
        <th>User Id</th>
        <td>{{$userById->id}}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{$userById->name}}</td>
    </tr>
    <tr>
        <th>Username</th>
        <td>{{$userById->username}}</td>
    </tr>
    <tr>
        <th>User Role ID</th>
        <td>{{$userById->role_id}}</td>
    </tr>
    <tr>
        <th>User Picture</th>
        <td><img src="{{asset($userById->image)}}" alt="{{$userById->name}}" height="150" width="200"></td>
    </tr>
</table>


@endsection