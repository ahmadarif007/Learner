@extends('admin.adminMaster')

@section('title')
Product | Details View
@endsection

@section('adminContent')

<div class="panel-heading text-center lead" style="font-size: 30px; font-weight: bold; color:#fff; background-color: #2F4F4F">
    View Product Details  
    <h3 class="text-center text-white">{{Session::get('message')}}</h3>
</div>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>
        <th>Product Id</th>
        <td>{{$productById->id}}</td>
    </tr>
    <tr>
        <th>Product Name</th>
        <td>{{$productById->productName}}</td>
    </tr>
    <tr>
        <th>Product Long Description</th>
        <td>{!! $productById->productDescription !!}</td>
    </tr>
    <tr>
        <th>Product Image</th>
        <td>
            <img src="{{asset($productById->productImage)}}" alt="{{$productById->productName}}" height="150" width="200">
        </td>
    </tr>
</table>


@endsection