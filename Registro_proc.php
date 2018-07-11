

<?php

$enlace = mysqli_connect("127.0.0.1", "root", "caput-draconis", "Escuela2");

if (!$enlace) {
    //echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    //echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    //echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    header('location: ErrorConexion.php');
}
echo "<br/> <p class='alert alert-success' id='alerta'>Conexion Realizada a la BD</p>";

$Nombre     =  $_REQUEST["Nombre"];
$ApellidoP  =  $_REQUEST["ApellidoP"];
$ApellidoM  =  $_REQUEST["ApellidoM"];
$Edad       =  $_REQUEST["Edad"];
$Calle      =  $_REQUEST["Calle"];
$Colonia    =  $_REQUEST["Colonia"];
$Cp         =  $_REQUEST["Cp"];
$email      =  $_REQUEST["email"];
$Fecha_nac  =  $_REQUEST["Fecha_nac"];
$NomUsr     =  $_REQUEST["NomUsr"];
$Contraseña =  $_REQUEST["Contraseña"]; 
//$foto = $_REQUEST["foto"];

//$foto =$enlace->real_escape_string(file_get_contents($_FILES["foto"]["tmp_name"]));

// leemos datos de la foto
/*$foto= $_FILES["foto"]["tmp_name"];
$nombrefoto  = $_FILES["foto"]["name"];
//este es el archivo que añadiremosal campo blob
$foto  = $_FILES['foto']['tmp_name'];
//lo comvertimos en binario antes de guardarlo
$foto=mysql_real_escape_string(file_get_contents($_FILES["foto"]["tmp_name"]));*/

$sql       ="INSERT INTO Profesor(Nombre,ApellidoP,ApellidoM,Edad,Calle,Colonia,Cp,Correo,Contrasena,cant_alumnos)  VALUES ('$Nombre','$ApellidoP','$ApellidoM','$Edad','$Calle','$Colonia','$Cp','$email','$Contraseña',0)";
$resultado = $enlace->query($sql);

if (!$resultado) {
    echo "<br/> <p class='alert alert-danger'>Error al Ingresar los datos a la tabla";
    echo "Error MySQL: ". $enlace->error." </p>";
    exit;
}




//Registrar todo en un archivo


//Contar los registros para seleccionar el ultimo
//$consulta = mysql_query("SELECT COUNT(*) as cuenta FROM Persona", $enlace);
//$res = mysql_fetch_assoc($consulta);

//echo (string) $res['cuenta'];


//$sql = "INSERT INTO Profesor(idPersona, Cant_Alumnos) "


mysqli_close($enlace);
?>

