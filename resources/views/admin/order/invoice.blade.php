@extends('admin.master')

@section('body')
<div class="container">
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="row p-5">
                <div class="col-md-6">
                    <img src="{{asset('front/img/logo.png')}}">
                </div>

                <div class="col-md-6 text-right">
                    <p class="font-weight-bold mb-1">Invoice #{{$order->id}}</p>
                    <p class="text-muted">Due to: {{$order->updated_at->format('j F \\a\\t h:i A')}}</p>
                    <a href="{{route('printInvoice',['id'=>$order->id])}}" class="text-primary">
                        <span><i class="fa fa-print fa-2x"></i></span>
                    </a>
                </div>
            </div>

            <hr class="my-5">

            <div class="row pb-5 p-5">
                <div class="col-md-6">
                    <p class="font-weight-bold mb-4">Client Information</p>
                    <p class="mb-1">{{$shipping->fullName}}</p>
                    <p class="mb-1">{{$shipping->phone}}</p>
                    <p class="mb-1">{{$shipping->address}}</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="font-weight-bold mb-4">Payment Details</p>
                    <p class="mb-1"><span class="text-muted">Payment Type: </span> {{$payment->paymentType}}</p>
                    <p class="mb-1"><span class="text-muted">Name: </span> {{$shipping->fullName}}</p>
                </div>
            </div>

            <div class="row p-5">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                          @php($i=1)
                          @php($sum = 0)
                          @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$orderDetail->proName}}</td>
                                <td>{{$orderDetail->qty}}</td>
                                <td>Tk.{{$orderDetail->price}}</td>
                                <td>Tk.{{$total = $orderDetail->price*$orderDetail->qty}}</td>
                            </tr>
                            @php($sum = $sum+$total)
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Grand Total</div>
                    <div class="h2 font-weight-light">Tk.{{$sum+$delCh=50}}</div>
                </div>

                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Delivery Charge</div>
                    <div class="h2 font-weight-light">Tk.{{$delCh = 50}}</div>
                </div>

                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Sub - Total amount</div>
                    <div class="h2 font-weight-light">Tk.{{$sum}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

</div>
@endsection
