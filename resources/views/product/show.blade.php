

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">
<link rel="stylesheet" href="css/template.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Webshop - Mats Verlinden</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <br><br>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <a href="../" class="btn btn-primary m-3">Terug naar Producten</a>
  <div class="container-fluid my-3">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 text-center">
            <img class="img-fluid shadow-lg " src="../{{$product->image}}" alt="Chania" width="370" height="255"> 
        </div>
        <div class="col-sm-1 "></div>
        <div class="col-sm-4">
            <h1 class="text-center mt-5">Details:</h1> 
                <hr>
                    <p class="small text-primary"></p> 
                    <h4 class="my-4">{{$product->name}}</h4>
                    <div class="h-25"></div>
                    <hr>
                    <a href="#" class="float-left btn btn-sm btn-outline-dark"><i class="fas fa-cart-plus"></i></a>
                    <p class="pt-2 float-right mx-4">&#8364; {{$product->price}}</p>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; By Mats Verlinden 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
