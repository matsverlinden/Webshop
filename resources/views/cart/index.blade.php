@extends('layouts.app')

@section('content')

<?php 
    $cartItems = session('cart');
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<div class="container">

    <div class="row justify-content-center">
        <h1>Winkelmand</h1>
        <!-- count zal een error geven wanneer cart leeg is -->

        
        <table class="table shoppingCartTable">

                @if (count($cart))
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Hoeveelheid</th>
                    <th scope="col">Prijs</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
                @foreach($cart as $item)

            <tbody>
                <tr>
                    <td><a href="../product/{{ $item['product']->id}}"> <img src="{{ $item['product']->image}}" width="50px" height="70px" >   {{ $item['product']->name }} </a> </td>
                    <td> {{ $item['qty']}} </td>
                    <td>PRIJS</td>
                        <td><a href="{{Route('cart.add', $item['product']->id)}}"><i class="fas fa-plus"></i></a></td>
                        <td><a href="{{Route('cart.remove', $item['product']->id)}}"><i class="fas fa-minus"></i></a></td>
                        <td><a href="{{Route('cart.delete', $item['product']->id)}}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                </tr>
                
                
                @endforeach
                <td> <a href="order" class="btn btn-success">Verder naar betalen</a></td>
                @else
                <tr>
                <td>
                <div class="emptyAlert  alert alert-info" role="alert">
                    Er zit niks in je winkelmandje
                </div>
                </td>
                </tr>
                @endif
            </tbody>
    </div>
    </table>


</div>
</div>

@endsection
