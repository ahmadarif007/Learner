@extends('admin.adminMaster')

@section('title')
Edit | Product
@endsection

@section('adminContent')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Edit Product Information
            </div>
            <hr/>
            <div class="well">
                <form class="form-horizontal" action="{{url('/update/product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Product Name</lable>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="productName" value="{{$productById->productName}}">
                            <input type="hidden" name="productId" value="{{$productById->id}}" class="form-control">
                            <span class="text-danger">{{$errors->has('productName')? $errors->first('productName'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Product Description</lable>
                        <div class="col-sm-9">
                            <textarea name="productDescription" class="form-control" rows="8">{{$productById->productDescription}}</textarea>
                            <span class="text-danger">{{$errors->has('productDescription')? $errors->first('productDescription'):''}}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <lable for="inputEmail3" class="col-sm-3 control-label">Product Image</lable>
                        <div class="col-sm-9">
                            <input type="file" name="productImage" accept="image/*">
                            <img src="{{asset($productById->productImage)}}" alt="" height="150" width="200">
                            <span class="text-danger">{{$errors->has('productImage')? $errors->first('productImage'):''}}</span> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="btn" class="btn btn-success btn-block" >Update Product Info</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
