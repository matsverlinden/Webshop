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
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->price }}</td>
            <td>{{ $category->product_category }}</td>
            <td>{{ $category->created_at}} </td>
            <td>{{ $category->updated_at}} </td>
        </tr>
    </tbody>

    @endsection
