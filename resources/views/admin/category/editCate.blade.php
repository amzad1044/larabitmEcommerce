@extends('admin.master')

@section('body')
	
	<div class="offset-1 col-lg-10">
		<form action="{{route('updateCategory')}}" method="post" class="form-horizontal">
			@csrf
			<div class="card">
				<div class="card-header">
	                <strong>Edit Category </strong>Form
	                
	            </div>

	            <div class="card-body card-block">
	            	
	            		<div class="row form-group">
	            			<div class="col col-md-3"><label for="hf-email" class=" form-control-label">Name</label>
	            			</div>
	            			<div class="col-12 col-md-9"><input type="text" id="hf-email" name="cateName" placeholder="Enter Category Name..." class="form-control" value="{{$category->cateName}}">
	            				<input type="hidden" id="hf-email" name="id" placeholder="Enter Category Name..." class="form-control" value="{{$category->id}}">
	            			</div>
	            			<div class="col-12 col-md-9 offset-3">
	            				<span class="text-danger">{{$errors->has('cateName') ? $errors->first('cateName') : ' '}}</span>
	            			</div>
	            		</div>
	            		<div class="row form-group">
	            			<div class="col col-md-3"><label for="hf-email" class=" form-control-label">Description</label>
	            			</div>
	            			<div class="col-12 col-md-9"><input type="text" id="hf-email" name="cateDescription" placeholder="Description..." class="form-control" value="{{$category->cateDescription}}"></div>
	            			<div class="col-12 col-md-9 offset-3">
	            				<span class="text-danger">{{$errors->has('cateDescription') ? $errors->first('cateDescription') : ' '}}</span>
	            			</div>
	            		</div>

	            		<div class="row form-group">
	            			<div class="col col-md-3"><label class="form-control-label">Status</label>
	            			</div>
	            			<div class="col col-md-9">
	            				<div class="form-check">
	            					<div class="radio">
	            						<label for="radio1" class="form-check-label ">
	            							<input type="radio" id="radio1" name="status" value="1" {{$category->status==1? 'checked' : ''}} class="form-check-input">Publish</label>
	            					</div>
	            					<div class="radio">
	            						<label for="radio1" class="form-check-label ">
	            							<input type="radio" id="radio1" name="status" value="0" {{$category->status==0? 'checked' : ''}} class="form-check-input">Unpublish</label>
	            					</div>
	            				</div>

	            			</div>

	            			<div class="col-md-9 offset-3">
	            				<span class="text-danger">{{$errors->has('status') ? $errors->first('status') : ' '}}</span>
	            			</div>

	            		</div>
	            	
	            </div>



	            <div class="card-footer">
	            	<button type="submit" name="btn" class="btn btn-primary btn-sm">
	            		<i class="fa fa-dot-circle-o"></i> Submit
	           		</button>
	           		<button type="reset" class="btn btn-danger btn-sm">
	           			<i class="fa fa-ban"></i> Reset
	           		</button>
	            </div>
			</div>
		</form>
	</div>
	
@endsection