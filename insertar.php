<?php

if(!isset($_POST['nombre'])) {

    header('registro.php');
}
require_once('plantillas/cabecera.php');

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$fechanac = $_POST['fechanac'];
$email = $_POST['email'];
?>

<h2>Alumno a insertar</h2>
<ul>
    <li>Nombre: <?=$nombre?></li>
    <li>Apellido1: <?=$apellido1?></li>
    <li>Apellido2: <?=$apellido2?></li>
    <li>Fecha de Nacimiento: <?=$fechanac?></li>
    <li>Correo electrónico: <?=$email?></li>
</ul>

<?php require_once('plantillas/pie.php');?>

