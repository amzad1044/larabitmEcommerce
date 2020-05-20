@extends('admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <h3 class="text-center">Customer Info</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                              <th>Customer Name</th>
                                <td>{{$customer->fname.' '.$customer->lname}}</td>
                            </tr>
                            <tr>
                              <th>Email</th>
                                <td>{{$customer->email}}</td>
                            </tr>
                            <tr>
                              <th>Phone</th>
                                <td>{{$customer->phone}}</td>
                            </tr>
                            <tr>
                              <th>Address</th>
                                <td>{{$customer->address}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <h3 class="text-center">Shipping Info</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                              <th>Full Name</th>
                                <td>{{$shipping->fullName}}</td>
                            </tr>
                            <tr>
                              <th>Email</th>
                                <td>{{$shipping->email}}</td>
                            </tr>
                            <tr>
                              <th>Phone</th>
                                <td>{{$shipping->phone}}</td>
                            </tr>
                            <tr>
                              <th>Address</th>
                                <td>{{$shipping->address}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <h3 class="text-center">Payment Info</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                              <th>Payment Type</th>
                                <td>{{$payment->paymentType}}</td>
                            </tr>
                            <tr>
                              <th>Payment Status</th>
                                <td>{{$payment->paymentStatus}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <h3 class="text-center">Order Info</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                              <th>Order ID</th>
                                <td>{{$order->id}}</td>
                            </tr>
                            <tr>
                              <th>Total Order</th>
                                <td>{{$order->orderTotal}}</td>
                            </tr>
                            <tr>
                              <th>Order Status</th>
                                <td>{{$order->orderStatus}}</td>
                            </tr>
                            <tr>
                              <th>Order Date</th>
                                <td>{{$order->created_at->format('j F \\a\\t h:i A')}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="text-center">Product Info</h3>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Sl No</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>

                            @php($i=1)
                            @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$orderDetail->proId}}</td>
                                <td>{{$orderDetail->proName}}</td>
                                <td>{{$orderDetail->price}}</td>
                                <td>{{$orderDetail->qty}}</td>
                                <td>{{$orderDetail->price*$orderDetail->qty}}</td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
