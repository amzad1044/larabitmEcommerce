<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\Payment;
use App\Orderdetails;
use Mail;
use Session;
use Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontEnd.checkout.checkoutContent');
    }

    public function Addcustomer(Request $request)
    {
        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->save();

        $custId = $customer->id;
        Session::put('custId',$custId);
        Session::put('custName',$customer->fname.' '.  $customer->lname);

        $email = $customer['email'];
        $messageData = ['email'=>$customer['email'],'fname'=>$customer['fname'],'lname'=>$customer['lname'],'code'=>base64_encode($customer['email'])];
        Mail::send('frontEnd.mails.confirmMail', $messageData, function($message) use ($email){
          $message->to($email);
          $message->subject('Mail confirmation');

        });
        return redirect('/checkout/shipping');
    }
    public function CustomerLoginCheck(Request $request)
    {
          $customer = Customer::where('email',$request->email)->first();
          if(password_verify($request->password,$customer->password))
          {
              Session::put('custId',$customer->id);
              Session::put('custName',$customer->fname.' '.$customer->lname);

              return redirect('/checkout/shipping');
          }
          else
          {
              echo "Access denied";
          }
    }

    public function CustomerLogout()
    {
        Session::forget('custId');
        Session::forget('custName');

        return redirect('/');
    }

    public function shippingFrom()
    {
        $customer = Customer::find(Session::get('custId'));
        return view('frontEnd.checkout.shipping',['customer'=>$customer]);
    }
    public function SaveShipping(Request $request)
    {
          $shipping = new Shipping();
          $shipping->fullName = $request->fullName;
          $shipping->email = $request->email;
          $shipping->phone = $request->phone;
          $shipping->address = $request->address;
          $shipping->save();

          Session::put('shipId',$shipping->id);
          return redirect('/checkout/payment');
    }
    public function Payment()
    {
          return view('frontEnd.checkout.payment');
    }
    public function NewOrder(Request $request)
    {
          $paymentType = $request->paymentType;
          if($paymentType == 'Cash')
          {
              $order = new Order();
              $order->custId = Session::get('custId');
              $order->shipId = Session::get('shipId');
              $order->orderTotal = Session::get('orderTotal');
              $order->save();

              $payment = new Payment();
              $payment->orderId = $order->id;
              $payment->paymentType = $paymentType;
              $payment->save();

              $cartProducts = Cart::content();
              foreach($cartProducts as $cartProduct)
              {
                  $orderDetails = new Orderdetails();
                  $orderDetails->orderId = $order->id;
                  $orderDetails->proId = $cartProduct->id;
                  $orderDetails->proName = $cartProduct->name;
                  $orderDetails->price = $cartProduct->price;
                  $orderDetails->qty = $cartProduct->qty;
                  $orderDetails->save();
              }
              Cart::destroy();
              return 'success';
          }
    }


}
