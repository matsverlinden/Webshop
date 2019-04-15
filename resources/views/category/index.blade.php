@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
    <nav class="nav">
		<a class="nav-link" href="{{ URL::to('category/create') }}">Add new category</a>
	</nav>
        <div class="col-sm-10">
            <table class="table">		
                <thead class="thead-light">
                    <tr class="font-weight-bolder">
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th class="text-center" scope="col">View</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($category as $categories)
                <tr>
                    <th scope="row">{{ $categories->id }}</th>
                    <td>{{ $categories->name }}</td>
                    <td style="width: 100px;" class="text-center"><a class="btn btn-success" href="{{action('CategoryController@show', ['id' => $categories->id])}}" role="button">View</a></td>
                    <td style="width: 100px;" class="text-center"><a class="btn btn-warning" href="{{action('CategoryController@edit', ['id' => $categories->id])}}" role="button">Edit</a></td>
                    <td style="width: 100px;" class="text-center"> 
                        <form action="{{action('CategoryController@destroy', ['id' => $categories->id])}}" method="post">
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