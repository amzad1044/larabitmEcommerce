<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
/*use DB; *///For query builder data insert

class CategoryController extends Controller
{
    public function index(){
    	return view('admin.category.addCategory');
    }

    public function saveCate(Request $request){
        // echo '<pre>';
        // print_r() ;
        // exit();

        $this->validate($request,[
            'cateDescription' => 'required',
            'status' => 'required'
        ]);
        /*$data=$request->all();*/
 
    	$category = new Category();
        //$category->fill($data)->save();
    	$category->cateName = $request->cateName;
    	$category->cateDescription = $request->cateDescription;
    	$category->status = $request->status;
    	$category->save();

    	/*Category::create($request->all());*/

    	/*DB::table('categories')->insert([
    		'cateName' => $request->cateName,
    		'cateDescription' => $request->cateDescription,
    		'status' => $request->status

    	]);*/

    	/*return 'success';*/
    	return redirect('/category/add')->with('message','Category save successfully.');
    }

    public function manageCate(){
    	$categories = Category::all();
    	return view('admin.category.manageCategory',['categories'=>$categories]);
    }

    public function publishCat($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();

        return redirect('/category/manage');
    }

    public function unpublishCat($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        return redirect('/category/manage');
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.editCate',['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $this->validate($request,[
            'cateName' => 'required|alpha|max:10|min:2',
            'cateDescription' => 'required',
            'status' => 'required'
        ]);
        
        $category = Category::find($request->id);

        $category->cateName = $request->cateName;
        $category->cateDescription = $request->cateDescription;
        $category->status = $request->status;

        $category->save();

        return redirect('category/manage')->with('message','Category updated successfully.');
    }

    public function deleteCate($id){
        $category = Category::find($id);
        $category->delete();

        return redirect('/category/manage')->with('message','Category Deleted Successfully.');
    }
}
