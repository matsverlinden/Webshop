@extends('layouts.app')

@section('content')
<?php 
    $cartItems = session('cart');
    $totalPrice = 0;
?>
<div class="container">
    <div class="row justify-content-center">
        <h1 id="orderTitle">Kassa</h1>
        <div class="col-6 float-right">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Account</div>
                    <div class="card-body">
                        <p>Naam: <b>{{ $user->name }}</b></p>
                        <p>Email: <b>{{ $user->email }}</b></p>
                    </div>
                </div>
        <div class="row orderRow">
            <div class="col-8">
           
                <table class="table shoppingCartTable">
                <h4>Uw bestelling:</h4>
                @if (!Auth::guest())

                    @foreach($cart as $item)
                    
                    @if ($item['qty'] > 0)
                    <tr>
                        <td>{{ $item['qty'] }}x</td>
                        <td>{{ $item['product']->name }}</td>
                        <td>&euro;{{ $item['product']->price * $item['qty']}} </td>
                    </tr>
                    @endif
                    <?php
                    
                    $totalPrice += $item['product']->price * $item['qty'];
                    ?>
                @endforeach

                <tbody>
                <!-- <h3>Lever naar:</h3>
                    <form action="delivery">
                <label for="">Woonplaats: </label>
                <input type="text" >
                <br>
                <label for="">Adres: </label>
                <input type="text">
                <br>
                <label for="">Postcode: </label>
                <input type="text" style='text-transform:uppercase'><br><br>
                    <a class="btn btn-success" href="#">Akkoord</a>
                    </form> -->

                    
                    </tbody>
                </table>
                <div class="alert alert-success" role="alert">
                    <p>Totaal: {{ $totalPrice }}</p>
                </div>
            </div>

                <form action="{{action('OrderViewController@create')}}" method="put">
                        @csrf 
                    <button type="submit" class="btn btn-outline-success">Bestelling afronden</button>
                </form>
            </div>
        </div> 
    </div>
</div>


                @else
                <p>niet ingelogd</p>
                <?php
                 redirect('../auth/login');
                ?>
                @endif

@endsection
