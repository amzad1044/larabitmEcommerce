@extends('admin.master')


@section('body')
<div class="content mt-3">
    <div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <!-- <h2 class="text-center text-success">{{Session::get('message')}}</h2> -->
                <div class="card-header">
                    <strong class="card-title">Manage Product</strong>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <input type="text" name="productName" class="form-control" placeholder="Enter key for search...." />
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">SL NO.</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Brand</th>
                                <th class="text-center">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Short Desc</th>
                                <th class="text-center">Picture</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@php($i=1)
                        	@foreach($products as $pro)
                        	<tr>
                        		<td class="text-center">{{$i++}}</td>
                        		<td class="text-center">{{$pro->cateName}}</td>
                        		<td class="text-center">{{$pro->brandName}}</td>
                        		<td class="text-center">{{$pro->productName}}</td>
                        		<td class="text-center">{{$pro->price}}</td>
                        		<td class="text-center">{{$pro->qty}}</td>
                        		<td class="text-center">{{Str::words($pro->short_desc,5)}}</td>
                        		<td class="text-center"><img src="{{asset($pro->productImg)}}" height="50" width="70"></td>
                        		<td class="text-center">{{$pro->status==1?'Published':'Unpublished'}}</td>

                        		<td class="text-center">
                        			@if($pro->status==1)
                                	<a href="" class="btn btn-sm btn-info">
                                		<span><i class="fa fa-arrow-up"></i></span>
                                	</a>
	                                @else
	                                <a href="" class="btn btn-sm btn-warning">
	                                	<span><i class="fa fa-arrow-down"></i></span>
	                                </a>
	                                @endif


                                	<a href="{{route('editPro',['id'=>$pro->id])}}" class="btn btn-sm btn-success">
                                		<span><i class="fa fa-edit"></i></span>
                                	</a>
                                	<a href="{{route('deletePr',['id'=>$pro->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">
                                		<span><i class="fa fa-trash"></i></span>
                                	</a>
                                </td>
                        	</tr>
                        	@endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
   </div><!-- .animated -->
 </div>
@endsection
