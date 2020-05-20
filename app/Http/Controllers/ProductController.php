<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Product;
use Image;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
    	$cats = Category::where('status',1)->get();
    	$brands = Brand::where('status',1)->get();

    	return view('admin.product.addProduct',[
    		'categories' => $cats,
    		'brands' => $brands
    	]);
    }

    protected function validateProduct($request){
    	$this->validate($request,[
    		'cate_id' => 'required',
    		'productImg' => 'required|max:2048',
    		'productName'=>'required'

    	]);
    }

    protected function imgUpload($request){
    	$proImg = $request->file('productImg');
    	$imageName = $proImg->getClientOriginalName();
    	$directory = 'productImages/';
    	$imageUrl = $directory.$imageName;
    	//$proImg->move($directory,$imageName);


        Image::make($proImg)->resize(300,200)->save($imageUrl);
    	return $imageUrl;


    }

    protected function savePro($request,$imageUrl){
    	$product = new Product();
    	$product->cate_id = $request->cate_id;
    	$product->brand_id = $request->brand_id;
    	$product->productName = $request->productName;
    	$product->price = $request->price;
    	$product->qty = $request->qty;
    	$product->short_desc = $request->short_desc;
    	$product->long_desc = $request->long_desc;
    	$product->productImg = $imageUrl;
    	$product->status = $request->status;
    	$product->save();
    }

    public function saveProduct(Request $request){
    	$this->validateProduct($request);
    	$imageUrl = $this->imgUpload($request);
    	$this->savePro($request,$imageUrl);

    	return redirect('/product/add')->with('message','Product added successfully.');

    }

    public function manageProduct(){
    	$products = DB::table('products')
    				->join('categories','products.cate_id','=','categories.id')
    				->join('brands','products.brand_id','=','brands.id')
    				->select('products.*','categories.cateName','brands.brandName')
    				->get();
    	return view('admin.product.managepro',['products'=>$products]);
    }

    public function editPoduct($id){
        $products = Product::find($id);
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();

        return view('admin.product.editPro',[
            'products' => $products,
            'categories' =>$categories,
            'brands' => $brands
        ]);
    }

    protected function UpdateProinfo($product,$request,$imageUrl){
        //$product = new Product();
        $product->cate_id = $request->cate_id;
        $product->brand_id = $request->brand_id;
        $product->productName = $request->productName;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        $product->productImg = $imageUrl;
        $product->status = $request->status;
        $product->save();
    }

    public function updateProduct(Request $request){
        $productImg = $request->file('productImg');
        if($productImg)
        {
            $product =Product::find($request->id);
            unlink($product->productImg);

            $imageUrl = $this->imgUpload($request);
            $this->UpdateProinfo($product,$request,$imageUrl);

            return redirect('/product/manage')->with('message','Product updated successfully.');
        }
        else
        {
            $product =Product::find($request->id);
            $product->cate_id = $request->cate_id;
            $product->brand_id = $request->brand_id;
            $product->productName = $request->productName;
            $product->price = $request->price;
            $product->qty = $request->qty;
            $product->short_desc = $request->short_desc;
            $product->long_desc = $request->long_desc;
            $product->status = $request->status;
            $product->save();

            return redirect('/product/manage')->with('message','Product updated successfully.');
        }
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $images = $product['productImg'];
        unlink($images);
        $product->delete();

        return redirect('/product/manage')->with('message','Product Deleted Successfully');

    }

}
