<?php 

	include 'conexion.php';

	$enlace = mysqli_connect("127.0.0.1", "root", "", "Escuela2");

	if (!$enlace) {
    	//echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    	//echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    	//echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    	header('location: ErrorConexion.php');
	}

	echo "<br/> <p class='alert alert-success' id='alerta'>Conexion Realizada a la BD</p>";

	$grupo = $_POST["grupo"];
	$i = 1;
	while(isset($_POST["alumno$i"])){
		echo "Registro $i"."<br>";
		$nombre = $_POST["alumno$i"];
		$contrasena = $_POST["contraseña$i"];
		echo "Nombre: " . $_POST["alumno$i"]."<br>";
		echo "Contraseña ". $_POST["contraseña$i"]."<br>";


		$sql ="INSERT INTO Alumno(Nombre,contrasena,IdProfesor,grupo)  VALUES ('$nombre','$contrasena',1,'$grupo')";
		$resultado = $enlace->query($sql);

		if (!$resultado) {
		    echo "<br/> <p class='alert alert-danger'>Error al Ingresar los datos a la tabla";
		    echo "Error MySQL: ". $enlace->error." </p>";
		    exit;
		}


		$i = $i+1;
	}
	mysqli_close($enlace);
	

 ?>