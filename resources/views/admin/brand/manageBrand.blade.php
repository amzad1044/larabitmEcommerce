@extends('admin.master')

@section('body')
<div class="content mt-3">
    <div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <!-- <h2 class="text-center text-success">{{Session::get('message')}}</h2> -->
                <div class="card-header">
                    <strong class="card-title">Manage Brand</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">SL NO.</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@php($i=1)
                        	@foreach($brands as $brand)
                            <tr>
                                <td class="text-center">{{$i++}}</td>
                                <td class="text-center">{{$brand->brandName}}</td>
                                <td class="text-center">{{$brand->brandDescription}}</td>
                                <td class="text-center">{{$brand->status == 1?'Published':'Unpublished'}}</td>
                                <td class="text-center">
                                	@if($brand->status==1)
	                                	<a href="{{route('unpublish',['id'=>$brand->id])}}" class="btn btn-sm btn-info">
	                                		<span><i class="fa fa-arrow-up"></i></span>
	                                	</a>
	                                @else
	                                	<a href="{{route('publish',['id'=>$brand->id])}}" class="btn btn-sm btn-warning">
                                		<span><i class="fa fa-arrow-down"></i></span>
                                		</a>
                                	@endif

                                	<a href="{{route('editBrand',['id'=>$brand->id])}}" class="btn btn-sm btn-success">
                                		<span><i class="fa fa-edit"></i></span>
                                	</a>
                                	<a href="{{route('deleteBrand',['id'=>$brand->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">
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