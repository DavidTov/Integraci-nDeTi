
<?php
//$enlace = mysqli_connect("localhost", "root", "caput-draconis", "Escuela2");
$enlace = mysqli_connect("localhost", "root", "", "Escuela2");

if (!$enlace) {
    header('location: index.php');
}
?>