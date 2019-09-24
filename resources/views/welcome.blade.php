@extends('layouts.app')

@section('content')

@if(session()->has('jsAlert'))
    <script>
        alert({{ session()->get('jsAlert') }});
    </script>
@endif 

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/template.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <title>Verlinden Shop</title>
</head>

<body>

  <?php
    if (Auth::user()) {
      ?>
        <a class="btn btn-success" href="{{Route('orderView.index')}}">Uw bestellingen</a>
      <?php
    }
  ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        
        <h1 class="my-4" style="font-family: 'Montserrat', sans-serif;">Verlinden Shop</h1>
        <div class="list-group">
        <b><h3 style="font-family: 'Kanit', sans-serif;">Categories</h3></b>
        @foreach ($category as $categories)
          <a style="font-family: 'Kanit', sans-serif;" href="category/{{ $categories->id }}" class="list-group-item">{{$categories->name}}</a>
          @endforeach
        </div>
        
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="col-lg-4 col-md-6 mb-4">
        </div>
        <div class="row">
        @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="product/{{ $product->id }}"><img class="card-img-top" src="{{ $product->image }}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a style="font-family: 'Kanit', sans-serif;" href="product/{{ $product->id }}">{{ $product->name }}</a>
                </h4>
                <h5>€{{$product->price}}</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">
              <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="float-left btn btn-sm btn-outline-dark"><i class="fas fa-cart-plus"></i></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-2 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white"> <i> Copyright &copy; By Mats Verlinden 2019 </i></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection