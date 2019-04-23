@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Add a new product</h1>

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

	<form method="POST" action="{{ url('product') }}">
        @csrf

		<div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" name="name"  autofocus>
            </div>
        </div>
        
		<div class="form-group row">
            <label for="price" class="col-sm-4 col-form-label text-md-right">{{ __('Price') }}</label>
                <div class="col-md-6">
                    <input id="price" type="number" name="price"  autofocus>
              </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-sm-4 col-form-label text-md-right">{{ __('Category') }}</label>
                <div class="col-md-6">
                    <select name="product_category" id="category">
                        <option value="Shoes">Shoes</option>
                        <option value="Shirts">Shirts</option>
                        <option value="Pants">Pants</option>
                        <option value="Caps">Caps</option>
                        <option value="Games">Games</option>
                    </select>
              </div>
        </div>
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>                             
        </div>
	</form>
</div>
@endsection
