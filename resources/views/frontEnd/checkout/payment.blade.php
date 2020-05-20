@extends('frontEnd.master')

@section('body')

  <div class="row">
      <div class="col-md-8 offset-2">
        <h2 class="text-center">Select payment type</h2>
          <div class="card">
              <div class="card-body">
                {{Form::open(['route'=>'newOrder','method'=>'POST'])}}
                  <table class="table table-bordered">
                      <tr>
                          <th>Cash on Delivery</th>
                          <td><input type="radio" name="paymentType" value="Cash"/> Cash on Delivery</td>
                      </tr>
                      <tr>
                          <th>bKash</th>
                          <td><input type="radio" name="paymentType" value="bKash"/> bkash</td>
                      </tr>
                      <tr>
                          <th>Cash on Delivery</th>
                          <td><input type="radio" name="paymentType" value="Cash"/> Cash on Delivery</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><input type="submit" class="main_btn" name="btn" value="Confirm"/></td>
                      </tr>
                  </table>
                  {{Form::close()}}
              </div>
          </div>
      </div>

  </div>

  <hr>

@endsection
