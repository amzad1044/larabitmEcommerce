<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use PDF;

use App\Order;
use App\Payment;
use App\Shipping;
use App\Customer;
use App\Orderdetails;

class OrderController extends Controller
{
    public function OrderManage()
    {
        $orders = DB::table('orders')
                      ->join('customers','orders.custId','=','customers.id')
                      ->join('payments','orders.id','=','payments.orderId')
                      ->select('orders.*','customers.fname','customers.lname','payments.paymentType','payments.paymentStatus')
                      ->get();
        return view('admin.order.manageorder',['orders'=>$orders]);
    }
    public function ViewDetailsOrder($id)
    {
        $order = Order::find($id);
        $customer = Customer::find($order->custId);
        $shipping = Shipping::find($order->shipId);
        $payment =  Payment::where('orderId',$order->id)->first();
        $orderDetails = Orderdetails::where('orderId',$order->id)->get();
        return view('admin.order.viewOrder',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
    }
    public function ViewInvoice($id)
    {
        $order = Order::find($id);
        $customer = Customer::find($order->custId);
        $shipping = Shipping::find($order->shipId);
        $payment =  Payment::where('orderId',$order->id)->first();
        $orderDetails = Orderdetails::where('orderId',$order->id)->get();
        return view('admin.order.invoice',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
    }

    public function InvoicePrint($id)
    {
        $order = Order::find($id);
        $customer = Customer::find($order->custId);
        $shipping = Shipping::find($order->shipId);
        $payment =  Payment::where('orderId',$order->id)->first();
        $orderDetails = Orderdetails::where('orderId',$order->id)->get();
        
        $pdf = PDF::loadView('admin.order.printInvoice',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
        return $pdf->stream('invoice.pdf');
    }
}
