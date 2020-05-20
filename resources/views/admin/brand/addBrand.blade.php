@extends('admin.master')

@section('body')
	<div class="offset-1 col-lg-10">
		<div class="card">
			<div class="card-header">
				<strong>Add Brand</strong>
				<h4 class="text-center text-success">{{Session::get('message')}}</h4>
			</div>
			<div class="card-body card-block">
				{{Form::open(['route'=>'newBrand','method'=>'post','class'=>'form-horizontal'])}}
				<div class="row form-group">
					<div class="col col-md-3">
						{{Form::label('brandName','Brand Name',['class'=>'form-control-label'])}}
					</div>
					<div class="col-12 col-md-9">
						{{Form::text('brandName','',['class'=>'form-control'])}}
					</div>
					<div class="col-12 col-md-9 offset-3">
        				<span class="text-danger">{{$errors->has('brandName') ? $errors->first('brandName') : ' '}}</span>
	            	</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3">
						{{Form::label('brandDescription','Description Name',['class'=>'form-control-label'])}}
					</div>
					<div class="col-12 col-md-9">
						{{Form::text('brandDescription','',['class'=>'form-control'])}}
					</div> 

					<div class="col-12 col-md-9 offset-3">
        				<span class="text-danger">{{$errors->has('brandDescription') ? $errors->first('brandDescription') : ' '}}</span>
	            	</div>

				</div>

				<div class="col col-md-3">{{Form::label('status','Publication Status',['class'=>'form-control-label'])}}</div>
                <div class="col col-md-9">
                    <div class="form-check-inline form-check">
                        <label for="inline-radio1" class="form-check-label ">
                            <input type="radio" name="status" value="1" class="form-check-input">Published
                        </label>
                        <label for="inline-radio2" class="form-check-label ">
                            <input type="radio" id="inline-radio2" name="status" value="0" class="form-check-input">Unpublished
                        </label>
                    </div>
                    <div class="col-12 offset-3">
        				<span class="text-danger">{{$errors->has('status') ? $errors->first('status') : ' '}}</span>
	            	</div>

                </div>
                <div>
                    <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
                </div>
				{{Form::close()}}
			</div>
		</div>
	</div>
@endsection