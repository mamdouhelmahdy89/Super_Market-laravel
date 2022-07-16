
@extends('product.layout')


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('products.index') }}" style="font-family:'Grape Nuts', cursive">SUPER MARKET FAMLY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


        <form class="form-inline my-2 my-lg-0" action="{{ route('products.index') }}">

          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"
          style="width: 400px;margin-left:580px">Go To Products</button>
        </form>
      </div>
  </nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/market.jpg" class="d-block w-100" width="100%" height="550px">
      </div>
      <div class="carousel-item">
        <img src="/images/market2.jpg" class="d-block w-100"  width="100%" height="550px" >
      </div>
      <div class="carousel-item">
        <img src="/images/market3.jpg" class="d-block w-100"   width="100%" height="550px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <ul class="list-group">
    <li class="list-group-item">Dapibus ac facilisis in</li>


    <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
    <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
    <li class="list-group-item list-group-item-success">A simple success list group item</li>
    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
    <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
    <li class="list-group-item list-group-item-info">A simple info list group item</li>
    <li class="list-group-item list-group-item-light">A simple light list group item</li>
    <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
  </ul>
