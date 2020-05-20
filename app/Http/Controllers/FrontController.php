<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Cart;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

		$newProducts = Product::where('status',1)->orderBy('id','desc')->take(4)->get();
		$featureProducts = Product::where('status',1)
			->orderBy('id','desc')
			->skip(3)
			->take(3)
			->get();

		return view('frontEnd.home.home',[
			'newProducts' => $newProducts,
			'featureProducts' => $featureProducts
		]);

	}
	public function category($id){
		$catProducts = Product::where('cate_id',$id)
					->where('status',1)
					->get();
		return view('frontEnd.category.category',[
			'catProducts' => $catProducts
		]);
	}
	public function blog(){
		return view('frontEnd.blog.blog');
	}
	public function blogSingle(){
		return view('frontEnd.blog.blogSingle');
	}
	public function contact(){
		return view('frontEnd.contact.contact');
	}
	public function cart(){
		return view('frontEnd.cart.showcart');
	}

	public function DetailsProduct($id){
		$product = Product::find($id);
		return view('frontEnd.product.productDetails',['product'=>$product]);
	}
}
