@extends('layouts.app')

@section('content')
<?php 
    $cartItems = session('cart');
    $totalPrice = 0;
?>
{{-- if user is logged in, he can proceed otherwise he need to login --}}
@if (!Auth::guest())
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
                </table>


                <div class="alert alert-success" role="alert">
                    <p>Totaal: {{ $totalPrice }}</p>
                </div>
            </div>

                <form action="{{route('orderView.store')}}" method="POST">
                        @csrf 
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="user_email" value="{{ $user->email }}">
                        <input type="hidden" name="user_name" value="{{ $user->name }}">
                        <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                    <button type="submit" class="btn btn-outline-success">Bestelling afronden</button>
                </form>
            </div>
        </div> 
    </div>
</div>
                @else
                <div class="container">
                <b><h3>niet ingelogd</h3></b><br>
                <b><p>log in om verder te gaan</p></b>
                </div>
                 
                
                @endif

@endsection
