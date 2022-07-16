@extends('product.layout')


@section('content')

  <div class="container">

  <div class="card" style="margin-top:12%;">
  <div class="card-body">
    <span> <a href="{{route('products.index')}}"> Go To Back </a></span>
    <p class="card-text"> product name :  {{ $product->name }}</p>
  
  </div>
</div>



  <div class="form-group">
    <label for="exampleFormControlInput1">{{ $product->name }}</label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">{{ $product->price }}</label>
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">{{ $product->detail }}</label>
    
        
   
  </div>

 
  
  </div>

@endsection