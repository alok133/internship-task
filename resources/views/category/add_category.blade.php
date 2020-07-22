@extends('layout.master')
@section('title','Add Category')
@section('content')

	<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">Add Category</h2></span><br><br>

  <a class="btn btn-success" href="{{url('/')}}"style="float: right;margin-right: 10%;">Add Product</a>

<br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <form method="post" action="{{url('/product/add-category')}}">

          @csrf

          <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control"required="">
          </div>

          <div class="form-group">
            <label>Parent Category</label>
           <select name="parent_id" class="form-control">
             <option value="0">Parent Category</option>

             @foreach($levels as $val)

             <option value="{{$val->id}}">{{$val->category_name}}</option>

             @endforeach
           </select>
          </div>

  
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      </div>
    </div>
  </div>

@endsection