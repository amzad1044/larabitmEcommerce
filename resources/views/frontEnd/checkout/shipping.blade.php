@extends('frontEnd.master')

@section('title')
  Shipping
@endsection

@section('body')
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <h3 class="mb-20 title_color">Give us your information!!</h3>
                {{Form::open(['route'=>'shippingsave', 'method'=>'POST'])}}
                  <div class="mt-10">
                    <input type="text" name="fullName" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'"
                     required class="single-input" value="{{$customer->fname.' '.$customer->lname}}">
                  </div>
                  <div class="mt-10">
                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                     required class="single-input" value="{{$customer->email}}">
                  </div>
                  <div class="mt-10">
                    <input type="text" name="phone" placeholder="Mobile" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile'"
                     required class="single-input" value="{{$customer->phone}}">
                  </div>
                  <div class="mt-10">
                    <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
                     required class="single-input" value="{{$customer->address}}">
                  </div>
                  <div class="mt-10">
                    <input type="submit" name="btn" value="Submit" class="main_btn" />
                  </div>

                {{Form::close()}}
              </div>

              <div class="col-lg-6 col-md-6">

              </div>



            </div>
          </div>
    </div>

</div>
@endsection
