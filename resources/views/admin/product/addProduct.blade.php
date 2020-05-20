@extends('admin.master')

@section('body')
	<div class="offset-1 col-lg-10">
		<div class="card">
			<div class="card-header">
				<strong>Add Product</strong>
				<h3 class="text-center text-success">{{Session::get('message')}}</h3>
			</div>
			<div class="card-body card-block">
				{{Form::open(['route'=>'newProduct', 'method'=>'post','class'=> 'form-horizontal','enctype'=>'multipart/form-data'])}}
					<div class="form-group row">
						<label class="control-label col-md-3">Category Name</label>
						<div class="col-md-9">
							<select class="form-control" name="cate_id">
								<option>--Select Category--</option>
								@foreach($categories as $cate)
								<option value="{{$cate->id}}">{{$cate->cateName}}</option>
								@endforeach
							</select>

						</div>
						<span class="text-danger">{{$errors->has('cateName') ? $errors->first('cateName') : ' '}}</span>
					</div>


					<div class="form-group row">
						<label class="control-label col-md-3">Brand Name</label>
						<div class="col-md-9">
							<select class="form-control" name="brand_id">
								<option>--Select Brand--</option>
								@foreach($brands as $brand)
								<option value="{{$brand->id}}">{{$brand->brandName}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3">Product Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="productName">
							<span class="text-danger">{{$errors->has('productName') ? $errors->first('productName') : ' '}}</span>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3">Product Price</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="price">
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-3">Quantity</label>
						<div class="col-md-9">
							<input type="number" min="1" class="form-control" name="qty">
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3">Short Description</label>
						<div class="col-md-9">
							<textarea class="form-control" name="short_desc" rows="2"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3">Long Description</label>
						<div class="col-md-9">
							<textarea id="editor" class="form-control" name="long_desc" rows="5"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3">Image</label>
						<div class="col-md-9">
							<input type="file" name="productImg">
							<span class="text-danger">{{$errors->has('productImg') ? $errors->first('productImg') : ' '}}</span>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-3">Status</label>
		                <div class="col col-md-9">
		                    <div class="form-check-inline form-check">
		                        <label for="inline-radio1" class="form-check-label ">
		                            <input type="radio" name="status" value="1" class="form-check-input">Published
		                        </label>
		                        <label for="inline-radio2" class="form-check-label ">
		                            <input type="radio" id="inline-radio2" name="status" value="0" class="form-check-input">Unpublished
		                        </label>
		                    </div>

		                </div>
            		</div>

					<div class="form-group row">
						
						<div class="col-md-9 offset-3">
							<input type="submit" name="btn" class="btn btn-primary" value="Add Product">
						</div>
					</div>

				{{Form::close()}}
			</div>	
		</div>
	</div>
	<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
@endsection