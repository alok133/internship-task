@extends('layout.master')
@section('title','View Product')
@section('content')

	<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View Product</h2></span><br><br>

  <a class="btn btn-success" href="{{url('/')}}"style="float: right;margin-right: 10%;">Add Product</a>

<br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">


        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>

   
    <tr>
      <th>{{$details->id}}</th>
      <td>{{$details->category_id}}</td>
      <td>{{$details->product_name}}</td>
      <td>{{$details->product_price}}</td>
      <td>{{$details->product_description}}</td>
     <td>
       <img src="{{asset('../upload/'.$details->image)}}" alt="" style="width: 100px;">
     </td>
  
    </tr>

  
    
  </tbody>
</table>

       
      </div>
    </div>
  </div>

@endsection