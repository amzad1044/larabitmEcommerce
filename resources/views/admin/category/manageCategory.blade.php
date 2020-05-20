@extends('admin.master')

@section('body')
<div class="content mt-3">
    <div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
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
                        	@foreach($categories as $category)
                            <tr>
                                <td class="text-center">{{$i++}}</td>
                                <td class="text-center">{{$category->cateName}}</td>
                                <td class="text-center">{{$category->cateDescription}}</td>
                                <td class="text-center">{{$category->status == 1?'Published':'Unpublished'}}</td>
                                <td class="text-center">
                                	@if($category->status==1)
	                                	<a href="{{route('unpublishCat',['id'=>$category->id])}}" class="btn btn-sm btn-info">
	                                		<span><i class="fa fa-arrow-up"></i></span>
	                                	</a>
	                                @else
	                                	<a href="{{route('publishCat',['id'=>$category->id])}}" class="btn btn-sm btn-warning">
                                		<span><i class="fa fa-arrow-down"></i></span>
                                		</a>
                                	@endif

                                	<a href="{{route('editCat',['id'=>$category->id])}}" class="btn btn-sm btn-success">
                                		<span><i class="fa fa-edit"></i></span>
                                	</a>
                                	<a href="{{route('deleteCat',['id'=>$category->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">
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