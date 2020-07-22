@extends('layout.master')
@section('title','Add Product')
@section('content')

<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">Add Product</h2></span><br><br>

  <a class="btn btn-success" href="{{url('/product/add-category/')}}"style="float: right;margin-right: 10%;">Add Category</a>

   <a class="btn btn-danger" href="{{url('/product/view-product/')}}"style="float: right;margin-right: 1%;">View Product</a>

<br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <form method="post" action="{{url('/')}}" enctype="multipart/form-data">

          @csrf

          <div class="form-group">
            <label>Under Category</label>
            <select class="form-control" name="category_id">
            	<?php echo $categories_dropdown?>
            </select>
          </div>

          <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="product_name" placeholder="Enter Product Name" class="form-control"required="">
          </div>

          <div class="form-group">
            <label>Product Price</label>
            <input type="text" name="product_price" placeholder="Enter Product Price" class="form-control"required="">
          </div>

           <div class="form-group">
            <label>Product Description</label>
            <textarea name="product_description" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label>Image</label><br>
            <input type="file" name="image">
          </div>

          <button type="submit" class="btn btn-primary">Add Product</button>

      </form>

      </div>
    </div>
  </div>

@endsection
