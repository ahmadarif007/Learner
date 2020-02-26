@extends('admin.adminMaster')

@section('title')
Manage | Product
@endsection

@section('adminContent')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
                Manage Product Information 
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover text-center" id="dataTables-example">
                    <thead>
                        <tr style="color: green">
                            <th style="text-align: center">#</th>
                            <th style="text-align: center">Product Name</th>
                            <th style="text-align: center">Product Description</th>
                            <!-- <th>Product Image</th> -->
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="odd gradeX">
                            <td>{{$product->id}}</td>
                            <td>{{$product->productName}}</td>
                            <td>{{$product->productDescription}}</td>
                            <!-- <td><img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" height="100" width="100"></td> -->

                            <td class="center">

                                <a href="{{url('/view/product/'.$product->id)}}" class="btn btn-success" title="Product Details View">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>

                                <a href="{{url('/edit/product/'.$product->id)}}" class="btn btn-info" title="Edit Product">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{url('/delete/product/'.$product->id)}}" class="btn btn-danger" title="Delete Product" onclick="return check_delete_status();">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
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