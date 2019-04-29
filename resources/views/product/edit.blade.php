@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Edit the Product</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	
	<nav class="navbar navbar-inverse">
	    <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('product') }}">View All Products</a></li>
	    </ul>
	</nav>

	<form method="POST" action="{{ action(ProductController::class . '@update', $product) }}">
        @csrf
        @method('PUT')

		<div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" name="name" value="{{ $product->name }}" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
            <label for="price" class="col-sm-4 col-form-label text-md-right">{{ __('Price') }}</label>
                <input id="price" type="text" name="price" value="{{ $product->price }}" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
            <label>Category: (currently <b>{{ $product->product_category}}</b>).</label><br>
                        <input type="radio" name="product_category" value="Shoes">Shoes</input>
                        <input type="radio" name="product_category" value="Shirts">Shirts</input>
                        <input type="radio" name="product_category" value="Pants">Pants</input><br>
                        <input type="radio" name="product_category" value="Food">Food</input>
                        <input type="radio" name="product_category" value="Drinks">Drinks</input>
              </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>                             
            </div>
        </div>
	</form>
</div>
@endsection
