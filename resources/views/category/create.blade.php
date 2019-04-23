@extends('layouts.app')

@section('content')
<div class="container">

	<h1>Add a new category</h1>

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
	        <li><a href="{{ URL::to('category') }}">View All categories</a></li>
	    </ul>
	</nav>

	<form method="POST" action="{{ url('category') }}">
        @csrf

		<div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" name="name"  autofocus>
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
