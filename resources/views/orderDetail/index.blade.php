@extends('layouts.app')

@section('content')

@include ('layouts.partials.flash')

<div class="container-fluid">
    <div class="row justify-content-center">
    <nav class="nav">
		<a class="nav-link" href="{{ URL::to('orderDetail/create') }}">Add new orderDetail</a>
	</nav>
        <div class="col-sm-10">
            <table class="table">		
                <thead class="thead-light">
                    <tr class="font-weight-bolder">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">category</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orderDetail as $orderDetails)
                <tr>
                    <th scope="row">{{ $orderDetails->id }}</th>
                    <td><a href="{{action('OrderDetailController@show', ['id' => $orderDetails->id])}}" role="button">
                    {{ $orderDetails->name }}</a></td>
                    <td> €{{$orderDetails->price}} </td>
                    <td> {{$orderDetails->orderDetail_category}} </td>
                    <td style="width: 100px;" class="text-center"><a class="btn btn-warning" href="{{action('OrderDetailController@edit', ['id' => $orderDetails->id])}}" role="button">Edit</a></td>
                    <td style="width: 100px;" class="text-center"> 
                        <form action="{{action('OrderDetailController@destroy', ['id' => $orderDetails->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
          
        </div>
    </div>
</div>
@endsection