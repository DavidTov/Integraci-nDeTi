<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seleccionar grupo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css2/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css2/style.css" rel="stylesheet">
   
      <!--  Script Validacion  -->



  </head>

  <body class="Fondo">
<?php 
include 'conexion.php';
?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="Manzana-Logo.svg" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AcercaDe.html">Acerca De</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<style type="text/css">
  .Fondo
  {
    /*background-image: url('Escolar-login.jpg');*/
    background: brown;
  }
</style>
<br />
<br />
    <!-- Page Content -->
    <div class="container rgba-white-light rounded col-lg-5 justify-content-center">
        <br />
        <br />
      <!-- Carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
  </ol>
  <div class="carousel-inner">

    <!-- PRIMERO-->
    <div class="carousel-item active">
     <a href="grupos/primero_a.php"> <img class="d-block w-100" src="grados/primero_A.png" alt="Second slide"> </a>
    </div>    
    <div class="carousel-item">
      <a href="primero_b.php"> <img class="d-block w-100" src="grados/primero_B.png" alt="Third slide"> </a>
    </div>

    <!-- SEGUNDO-->
    <div class="carousel-item">
     <a href="segundo_a.php"> <img class="d-block w-100" src="grados/segundo_a.jpg" alt="First slide">  </a>
    </div>
    <div class="carousel-item">
     <a href="segundo_b.php"> <img class="d-block w-100" src="grados/segundo_b.jpg" alt="First slide">  </a>
    </div>

    <!--TERCERO -->
    <div class="carousel-item">
     <a href="tercero_a.php"> <img class="d-block w-100" src="grados/tercero_a.jpg" alt="First slide">  </a>
    </div>
    <div class="carousel-item">
     <a href="tercero_b.php"> <img class="d-block w-100" src="grados/tercero_b.jpg" alt="First slide">  </a>
    </div>

    <!--CUARTO-->
    <div class="carousel-item">
     <a href="cuarto_a.php"> <img class="d-block w-100" src="grados/cuarto_a.jpg" alt="First slide">  </a>
    </div>
    <div class="carousel-item">
     <a href="cuarto_b.php"> <img class="d-block w-100" src="grados/cuarto_b.jpg" alt="First slide">  </a>
    </div>

    <!--QUINTO-->
    <div class="carousel-item">
     <a href="quinto_a.php"> <img class="d-block w-100" src="grados/quinto_a.jpg" alt="First slide">  </a>
    </div>
    <div class="carousel-item">
     <a href="quinto_b.php"> <img class="d-block w-100" src="grados/quinto_b.jpg" alt="First slide">  </a>
    </div>

    <!--SEXTO-->
    <div class="carousel-item">
     <a href="sexto_a.php"> <img class="d-block w-100" src="grados/sexto_a.png" alt="First slide">  </a>
    </div>

    <div class="carousel-item">
     <a href="sexto_b.php"> <img class="d-block w-100" src="grados/sexto_b.jpg" alt="First slide">  </a>
    </div>
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

           
    

      
    </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
