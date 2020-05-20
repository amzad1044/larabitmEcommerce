<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddtoCart(Request $request)
    {
      $product = Product::find($request->id);
      Cart::add([
        'id' => $request->id,
        'name' => $product->productName,
        'price' => $product->price,
        'qty' => $request->qty,
        'options' =>[
          'image' => $product->productImg
        ]
      ]);

      return redirect('/cart/show');
    }
    public function ShowCart()
    {
      $cartProducts = Cart::content();

      return view('frontEnd.cart.showcart',[
        'cartProducts' => $cartProducts
      ]);
    }

    public function DeleteCart($id)
    {
      Cart::remove($id);
      return redirect('cart/show');
    }
    public function UpdateCart(Request $request)
    {
        Cart::update($request->rowId,$request->qty);
        return redirect('cart/show');
    }
}
