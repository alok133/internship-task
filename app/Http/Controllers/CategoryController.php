<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function addCategory(Request $request){

    	
    	

    	if($request->isMethod('post')){

    		$data=$request->all();

    		$category=new Category;

    		$category->category_name=$data['category_name'];
    		$category->parent_id=$data['parent_id'];

    		$category->save();

    		return redirect()->back()->with('success','Category Successfully Added!!');
    	}

    	$levels=Category::where(['parent_id'=>0])->get();

    	return view('category.add_category',compact('levels'));
    }
}
