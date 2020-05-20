<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
    	return view('admin.brand.addBrand');
    }

    public function saveBrand(Request $request){
        $this->validate($request,[
            'brandName' => 'required|alpha|max:10|min:2',
            'brandDescription' => 'required',
            'status' => 'required'
        ]);

    	$brand = new Brand();

    	$brand->brandName = $request->brandName;
    	$brand->brandDescription = $request->brandDescription;
    	$brand->status = $request->status;

    	$brand->save();
    	return redirect('/brand/add')->with('message','Brand added successfully');
    }
    public function managebrand(){
    	$brands =Brand::all();
    	return view('admin.brand.manageBrand',['brands'=>$brands]);
    }

    public function unpublishMethod($id){
    	$brand = Brand::find($id);
    	$brand->status=0;
    	$brand->save();
    	return redirect('brand/manage');
    }
    public function publishMethod($id){
    	$brand = Brand::find($id);
    	$brand->status=1;
    	$brand->save();
    	return redirect('brand/manage');
    }

    public function editBrand($id){
    	$brand = Brand::find($id);
    	return view('admin.brand.brandEdit',['brand'=>$brand]);
    }
    public function updateBrand(Request $request){
        $this->validate($request,[
            'brandName' => 'required|alpha|max:10|min:2',
            'brandDescription' => 'required',
            'status' => 'required'
        ]);
        
    	$brand = Brand::find($request->id);

        $brand->brandName = $request->brandName;
        $brand->brandDescription = $request->brandDescription;
        $brand->status = $request->status;

        $brand->save();

        return redirect('brand/manage')->with('message','Brand updated successfully.');
    }

    public function deleteBrand($id){
    	$brand = Brand::find($id);
    	$brand->delete();

    	return redirect('/brand/manage')->with('message','Data Deleted Successfully.');
    }
}
