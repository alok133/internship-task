<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Product;
use App\Category;
use DB;


class ProductController extends Controller
{
     public function addProduct(Request $request)
    {

    if($request->isMethod('post')){

		if($request->hasfile('image')){

			$data=$request->all();

			$file=$request->file('image');
			$filename='image'.time().'.'.$request->image->extension();
			$destination=storage_path('../public/upload');
			$file->move($destination,$filename);
			$path="/".$filename;
		}

		$product=new Product;
		$product->category_id=$data['category_id'];
		$product->product_name=$data['product_name'];
		$product->product_price=$data['product_price'];
		$product->product_description=$data['product_description'];
		$product->image=$path;

		$is_saved=$product->save();

		return redirect('/product/view-product')->with('success','Product Successfully Added!!');
	}

	// ***************Category Dropdown Menu Code****************

	$categories=Category::where(['parent_id'=>0])->get(); 
	$categories_dropdown="<option value='' selected disabled>Select</option>";
	foreach($categories as $cat){

		$categories_dropdown .="<option value='".$cat->id."'>".$cat->category_name."</option>";
		$sub_categories=Category::where(['parent_id'=>$cat->id])->get();

  // ************* Sub Category Dropdown Menu Code**************


		foreach($sub_categories as $sub_cat){

			$categories_dropdown .="<option value='".$sub_cat->id."'>&nbsp;--&nbsp".$sub_cat->category_name."</option>";
		}

		
	}
	return view('product.add_product',compact('categories_dropdown'));
    	
  }

  public function viewProduct(){

  	$product_detail=Product::all();

  	return view('product.view_product',compact('product_detail'));
  }

  public function editProduct(Request $request,$id=null){

  	if($request->isMethod('post')){

  		$data=$request->all();

  		if($request->hasfile('image')){

			$data=$request->all();

			$file=$request->file('image');
			$filename='image'.time().'.'.$request->image->extension();
			$destination=storage_path('../public/upload');
			$file->move($destination,$filename);
			$path="/".$filename;
		}
		else{

			$path=$data['current_image'];
		}

		$product=Product::find($id);
		$product->category_id=$data['category_id'];
		$product->product_name=$data['product_name'];
		$product->product_price=$data['product_price'];
		$product->product_description=$data['product_description'];
		$product->image=$path;

		$product->save();

		return redirect('/product/view-product')->with('success','Product Successfully Edited!!');;


  	}

  	$get_product=Product::find($id);

  	$categories=Category::where(['parent_id'=>0])->get();
  	$categories_dropdown="<option value='' selected disabled>Select</option>";


    // ***************Category Dropdown Menu Code****************


  	foreach($categories as $cat){

  		if($cat->id==$get_product->category_id){

  			$selected="selected";
  		}
  		else{

  			$selected="";
  		}

  		$categories_dropdown.="<option value='".$cat->id."'".$selected.">".$cat->category_name."</option>";
  	}


  // **************Sub Category Dropdown Menu Code****************


  	$sub_categories=Category::where(['parent_id'=>$cat->id])->get();

  	foreach($sub_categories as $sub_cat){

  		if($sub_cat->id==$get_product->category_id){

  			$selected="selected";
  		}
  		else{

  			$selected="";
  		}

  		$categories_dropdown.="<option value='".$sub_cat->id."' ".$selected.">&nbsp;&nbsp; ".$sub_cat->category_name."</option>";

  	}

  	return view('product.edit_product',compact('get_product','categories_dropdown'));
  }

  public function deleteProduct($id=null){

  	$delete=Product::find($id)->delete();

  	return redirect()->back()->with('success','Product Successfully Deleted!!');;
  }

  public function view($id=null){

  	$details=Product::find($id);

  	return view('product.view_singleProduct',compact('details'));
  }
  
}
