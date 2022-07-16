@extends('product.layout')


@section('content')

  <div class="jumbotron container" style="background-color:aqua;">


    <hr class="my-4">
    <p >It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create Product</a>
  </div>

     <div class="container">
         @if ($message = Session::get('success'))

             <div class="alert alert-primary" role="alert">
                {{$message}}
             </div>

         @endif

     </div>

    @php
        $i=0;
    @endphp
  <div class = "container">

      <table class="table">


        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">product price</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $item )


            <tr  style="background-color:#aaa">

            <th scope="row">{{++$i}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>

            <div class="row">
              <div class="col-sm">
               <a class='btn btn-success' href="{{route('products.edit' , $item->id)}}">Edit</a>
              </div>
              <div class="col-sm">
                <a class='btn btn-primary' href="{{route('products.show' , $item->id)}}">Show</a>
              </div>
              <div class="col-sm">
                <a class='btn btn-warning' href="{{route('soft.delete' , $item->id)}}">soft delete</a>
               </div>
              <div class="col-sm">
                 <form action="{{route('products.destroy' , $item->id)}}" method="POST">
                  @csrf
                 @method('DELETE')
                 <button type = "submit" class='btn btn-danger'>delete</button>
                </form>
              </div>
            </div>
            </td>
            </tr>
            <tr>
           @endforeach
        </tbody>
      </table>


      {{$products->links()}}

  </div>


@endsection
