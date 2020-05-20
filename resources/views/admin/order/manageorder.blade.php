@extends('admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h3 class="text-cetner">Manage Order</h3>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Customer Name</th>
                                <th>Total order</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>

                            @php($i=1)
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->fname.' '.$order->lname}}</td>
                                <td>{{$order->orderTotal}}</td>
                                <td>{{Carbon\Carbon::parse($order->created_at)->format('j F \\a\\t h:i A')}}</td>
                                <td>{{$order->orderStatus}}</td>
                                <td>{{$order->paymentType}}</td>
                                <td>{{$order->paymentStatus}}</td>
                                <td>
                                    <a href="{{route('viewOrderDetails',['id'=>$order->id])}}" class="text-info">
                                        <span><i class="fa fa-info-circle"></i></span>
                                    </a>
                                    <a href="{{route('invoice',['id'=>$order->id])}}" class="text-success">
                                        <span><i class="fa fa-video-camera"></i></span>
                                    </a>
                                    <a href="#" class="text-danger">
                                        <span><i class="fa fa-trash"></i></span>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <span><i class="fa fa-check-square-o"></i></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
