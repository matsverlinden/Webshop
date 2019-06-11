@extends('layouts.app')

@section('content')
<?php 
    $cartItems = session('cart');
?>
<div class="container">

    <div class="row justify-content-center">
        <h1>Winkelmand</h1>
        @if(Session::has('cart'))
        <table class="table shoppingCartTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product</th>
                    <th scope="col">Hoeveelheid</th>
                    <th scope="col">Prijs</th>
                </tr>
            </thead>
            <tbody>
              <tr>
              @foreach($products as product)
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td></td>
                @endforeach
              </tr>
            </tbody>
            @else
        </div>
        <div class="emptyAlert  alert alert-info" role="alert">
            Er zit niks in je winkelmandje
        </div>
        @endif
    </div>    
</div>

@endsection