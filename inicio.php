<?php 
  
  if (isset($_POST['alumnos'])) {
    header("Location: seleccionarGrupo.php");
  }
  if (isset($_POST['maestros'])) {
    header("Location: index.php");
  }

 ?>



<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css2/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css2/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="inicio.css">
   
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
              <a class="nav-link" href="Registro.php">Registrarse
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
    background-image: url('math.png');
    /*background: green;*/
  }
</style>

<center>
  <div class="p-3 mb-2 bg-success text-white"><h1>Sistema de Aprendizaje de matemáticas Nivel Primaria</h1></div>
</center>
    <!-- Page Content -->
    <div class="container rgba-white-light rounded col-lg-5 justify-content-center">
        <br />
        
      <!-- Login -->
            <form action="inicio.php" method="POST">
              <center>
              <div class="row justify-content-center">
                <div class="col-md-6">
                      
                      <button type="submit" name="maestros" class="btn btn-primary animated pulse infinite">Maestros, clic aquí</button>
                </div>
              </div>
              <div class="row justify-content-center">
                <button type="submit" name="alumnos" class="btn btn-warning animated pulse infinite">Alumnos, clic aquí</button>
              </div>
              <br/>
               <div class="contenedor">
      <p>Bienvenidos</p>
      <dl>
        <dt>Maestros</dt>
        <dt>Alumnos</dt>
      </dl>
    </div>
              
           </form>     
            <script type="text/javascript">
        function grupos()
        {
          //Obtener los datos de los campos
          alert();
          <?php echo "string"; ?>
        }
      </script>
      <!-- Login -->

      <!--    -->
    
    </div>
    <!-- /.container -->
    <br>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
