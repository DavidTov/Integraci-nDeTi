<?php 
  
  $numero = $_POST["numero"];
  
  if (isset($_POST["regAlumno"])) {
    echo "hola";
  }

 ?>

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Alumnos</title>

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
    /*background-image: url('Escolar-login.jpg');*/
    background: orange;
  }
</style>
<br />
<br />
    <!-- Page Content -->
    <div class="container rgba-white-light rounded col-lg-5 justify-content-center">
        <br />
        <br />
      <!-- Login -->
            <form action="regAlumno_a_bd.php" onsubmit="return Validar()" method="POST" >
              <center>
              <?php for ($i=0; $i < $numero; $i++) { 
                // Aqui comienza el ciclo
               ?>
              <div class="row justify-content-center">
                <div class="col-md-6">
                      <label for="email">Alumno: <?php $j=$i+1; echo "$j";; ?></label>
                      <input type="text" class="form-control" placeholder="<?php echo "alumno $j" ?>" name="<?php echo "alumno$j" ?>" id="alumno" required/>  
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6">
                        <label for="pwd">Contraseña: <?php $j=$i+1; echo "$j";; ?></label>
                        <input type="password" class="form-control"  placeholder="Contraseña" name="<?php echo "contraseña$j" ?>" id="Cont" required/>  
                </div>
              </div>
              
              <br/><br/>
              <?php  } //Aqui se cierra el ciclo?>

              <label for="email">Grupo: </label>
              <input type="input" class="form-control"  placeholder="Grupo" name="grupo" id="grupo" required> 
              <br>
                <button type="submit" name="regAlumno" onclick="return validaGrupo();" class="btn btn-primary animated pulse infinite">Registrar Alumnos</button>
                <br>
           </form>     
           <br>



            <script type="text/javascript">
        function Validar()
        {
          //Obtener los datos de los campos
          Nombre  = document.getElementById("alumno").value;
         
          if(Nombre == null || Nombre.length > 50)
          {
              alert("Nombre mUy largo");
              Nombre.style.backgroundColor ="#ff0000";
              return false;
          }
          return true;
        }


        function validaGrupo() {
          var grupo = document.getElementById("grupo").value;
          var patron = /^[123456][AB]$/;

          if(grupo.search(patron)){
            alert("Grupo no válido");
            return false;
          }
        }
      </script>
      <!-- Login -->

      <!--    -->
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
