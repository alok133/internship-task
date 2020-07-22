@extends('layout.master')
@section('title','View Product')
@section('content')

<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View Product</h2></span><br><br>

<a class="btn btn-success" href="{{url('/')}}"style="float: right;margin-right: 10%;">Add Product</a>

	
<br><br>
  <div class="container">


    <div class="row">
      <div class="col-sm-12">

        <table id="example" class="display" style="width:100%">

           <thead>
     <tr>
              
       <th></th> 
      <th scope="col">Sr. No.</th>
      <th scope="col">Category Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>


    </tr>
  </thead>

  <tbody>

    <?php $count=1; ?>

    @foreach($product_detail as $details)
    <tr>
      <th><input type="checkbox" name=""></th>
      <th>{{$count++}}</th>
      <td>{{$details->category_id}}</td>
      <td>{{$details->product_name}}</td>
      <td>{{$details->product_price}}</td>
      <td>{{$details->product_description}}</td>
     <td>
       <img src="{{asset('../upload/'.$details->image)}}" alt="" style="width: 100px;">
     </td>

     <td>

      <a href="{{url('/product/view/'.$details->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" title="View"></i></a>

       <a href="{{url('/product/edit-product/'.$details->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil" title="Edit"></i></a>

       <a href="{{url('/product/delete-product/'.$details->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Delete"></i></a>

     


     </td>

     
      

      
    </tr>

    @endforeach
    
  </tbody>
       
        </table>


      </div>
    </div>
  </div>

@endsection