@extends('layouts.app')

@section('content')

<table class="table">
    <thead class="thead-light">
        <tr class="font-weight-bolder">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->product_category }}</td>
            <td>{{ $product->created_at}} </td>
            <td>{{ $product->updated_at}} </td>
        </tr>
    </tbody>

    @endsection
