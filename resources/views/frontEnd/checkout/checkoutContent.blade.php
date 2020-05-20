@extends('frontEnd.master')


@section('title')
  Checkout
@endsection


@section('body')
<div class="whole-wrap">
		<div class="container">
        <div class="section-top-border">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <h3 class="mb-20 title_color">Register here</h3>
                {{Form::open(['route'=>'newCustomer','method'=>'POST'])}}
                  <div class="mt-10">
                    <input type="text" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
                     required class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="text" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
                     required class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                     required class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="text" name="phone" placeholder="Mobile" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile'"
                     required class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                     required class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
                     required class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="submit" name="btn" value="Register" class="main_btn" />
                  </div>

                {{Form::close()}}
              </div>

              <div class="col-lg-6 col-md-6">
                <h3 class="mb-20 title_color">If Registered Login Here</h3>
                {{Form::open(['route'=>'customerLogin', 'method'=>'POST'])}}


                  <div class="mt-10">
                    <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
                     required class="single-input">
                  </div>

                  <div class="mt-10">
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                      class="single-input">
                  </div>
                  <div class="mt-10">
                    <input type="submit" name="btn" value="Register" class="main_btn" />
                  </div>

                {{Form::close()}}
              </div>



            </div>
          </div>
    </div>

</div>
@endsection
