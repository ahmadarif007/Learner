@extends('admin.adminMaster')

@section('title')
Add | Portfolio
@endsection

@section('adminContent')

<div class="container" style="margin-top:17px">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Add Distributor Information  
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <hr/>
            <div class="well">
                <form class="form-horizontal" action="{{url('/save/userInfo')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf

                        <div class="form-group">
                            <div class="col-sm-6" style="margin-bottom: 10px">
                                <input type="file" name="image" accept="image/*">
                                <span class="text-danger">[ Upload your picture here ]</span> 
                                <span class="text-danger">{{$errors->has('image')? $errors->first('image'):''}}</span> 
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                                <span class="text-danger">{{$errors->has('name')? $errors->first('name'):''}}</span> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                                <span class="text-danger">{{$errors->has('email')? $errors->first('email'):''}}</span> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="username" placeholder="Enter your User Name">
                                <span class="text-danger">{{$errors->has('username')? $errors->first('username'):''}}</span> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                                <span class="text-danger">{{$errors->has('password')? $errors->first('password'):''}}</span> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <select name="publicationStatus" class="form-control">
                                    <option>User Type</option>
                                    <?php
                                        $roleId = Session::get('roleId');
                                            if ($roleId == 1) { ?>
                                                <option value="1">Admin</option>
                                                <option value="2">Distributor</option>
                                                <option value="3">Business Manager</option>
                                                <option value="4">General User</option>
                                            <?php } else if ($roleId == 2) { ?>
                                                <option value="3">Business Manager</option>
                                                <option value="4">General User</option>
                                            <?php } else if ($roleId == 3) { ?>
                                                <option value="4">General User</option>
                                            <?php } else { ?>
                                                <option value="4">General User</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <button name="btn" type="submit" class="btn btn-warning form-control" >Submit</button> 
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
