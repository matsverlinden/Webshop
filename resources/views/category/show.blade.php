@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <nav class="nav">
            <a class="nav-link" href="{{ URL::to('category/') }}">Back to categories</a>
        </nav>
        <div class="col-sm-10">
            <table class="table">
                <thead class="thead-light">
                    <tr class="font-weight-bolder">
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($category->products as $product)

                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at}} </td>
                        <td>{{ $product->updated_at}} </td>
                    </tr>
                </tbody>
            </table>

            @endforeach

            @endsection
