@extends('product.layout')


@section('content')

  <div class="container">

  <div class="card" style="margin-top:12%;">
  <div class="card-body">
     <span> <a href="{{route('products.index')}}"> Go To Back </a></span>
    <p class="card-text"> product name :  {{ $product->name }}</p>
  
  </div>
</div>

<form action="{{route('products.update' , $product->id)}}" method='POST'>
   
   @csrf

   @method('PUT')

  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">price</label>
    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="product price">
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details</label>
    <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3">
        {{ $product->detail }}
    </textarea>
  </div>

  <div class="form-group">
      <button type="save" class="btn btn-primary" >Update</button>
  </div>
</form> 
  
  </div>

@endsection