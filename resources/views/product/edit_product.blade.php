@extends('layout.master')
@section('title','Edit Product')
@section('content')

	<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">Edit Product</h2></span>

<br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <form method="post" action="{{url('/product/edit-product/'.$get_product->id)}}" enctype="multipart/form-data">

          @csrf

          <div class="form-group">
            <label>Under Category</label>
            <select class="form-control" name="category_id" required="">

              <?php echo $categories_dropdown?>
            	
            </select>
          </div>

          <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="product_name" placeholder="Enter Product Name" value="{{$get_product->product_name}}" class="form-control" required="">
          </div>

          <div class="form-group">
            <label>Product Price</label>
            <input type="text" name="product_price" placeholder="Enter Product Price" value="{{$get_product->product_price}}" class="form-control" required="">
          </div>

           <div class="form-group">
            <label>Product Description</label>
            <textarea name="product_description" class="form-control">
              {{$get_product->product_description}}
            </textarea>
          </div>

          <div class="form-group">
            <label>Image</label><br>
            <input type="hidden" name="current_image" value="{{$get_product->image}}">
            <input type="file" name="image"><br>

            <img src="{{asset('../upload/'.$get_product->image)}}" style="width: 100px;margin-top: 10px;">
          </div>

          <button type="submit" class="btn btn-primary">Edit Product</button>
          
      </form>

      </div>
    </div>
  </div>

@endsection