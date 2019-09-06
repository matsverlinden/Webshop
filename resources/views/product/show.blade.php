@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Verlinden Shop</title>
</head>

<body>


  <!-- Page Content -->
  <a style="font-family: 'Kanit', sans-serif;" href="../" class="btn btn-primary m-3">Terug naar Producten</a>
  <div class="container-fluid my-3">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 text-center">
            <img class="img-fluid shadow-lg " src="../{{$product->image}}" alt="Chania" width="370" height="255"> 
        </div>
        <div class="col-sm-1 "></div>
        <div class="col-sm-4">
            <h1 style="font-family: 'Kanit', sans-serif;" class="text-center mt-5">Product:</h1> 
                <hr>
                    <p class="small text-primary"></p> 
                    <h4 style="font-family: 'Kanit', sans-serif;" class="my-4">{{$product->name}}</h4>
                    <div class="h-25"></div>
                    <hr>
                    <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="float-left btn btn-sm btn-outline-dark"><i class="fas fa-cart-plus"></i></a>
                    <p class="pt-2 float-right mx-4">&#8364; {{$product->price}}</p>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

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