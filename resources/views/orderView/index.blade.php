@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Montserrat:100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit:200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/template.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<title>Verlinden Shop</title>
</head>

<div class="container">

    <div class="row">
        <table class="col-sm-12">
            <div class="full-right">
                <h2>Uw Bestellingen</h2>
            </div>
            <tr>
                <th>Order number</th>
                <th>Products</th>
                <th>Quantity</th>
                <th>Time of order</th>
            </tr>
            {{-- loop through all the orders and products --}}
            @foreach ($orders as $order)
            @foreach ($products as $product)
            @foreach ($orderProduct as $ordproduct)
            <tr>
                <?php
                        $currentUser = Auth::user();
                        //only show the orders of the person who is logged in right now
                        if ($order->user_id == $currentUser->id) {
                        //show name of the products if the id of the product is the same with the ordered one
                        if ( $ordproduct->product_id == $product->id) {
                        //show the order if the id of the order is the same order_id from the one in the pivot table
                        if ($order->id == $ordproduct->order_id) {

                            ?>
                <td>{{ $order->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $ordproduct->quantity }}x</td>
                <td>{{ $order->created_at }}</td>
                <?php
                        }
                    }
                }
                    ?>
            </tr>
            @endforeach
            @endforeach
            @endforeach
        </table>



        @endsection
