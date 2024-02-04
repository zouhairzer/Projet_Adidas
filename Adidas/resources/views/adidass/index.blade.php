@extends('layouts.app')
@section('title','Category')
@section('content')
    <br><br>
    <div class="container">
      <div class="row">
        @foreach($products as $product)
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img width="250" height="250" class="card-img-top" src="images/{{ $product->image }}" alt="{{ $product->description }}">
              <div class="card-body ">
                <h3 class="card-text text-center p-0 mb-0 bg-success text-white">{{ $product->prix }}DH</h3>
                <p class="card-title text-center">{{ $product->description }}</p>
                  <h6 class=" text-center">{{ $product->cat_name }}</h6>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
@endsection
