<?php
require_once('config.php');

if (!$_GET['id']) {
    header('Location:listado.php');
}

$_SESSION['mensaje']="";

$id = $_GET['id'];

$consulta="DELETE FROM alumnos WHERE id=$id";

$resultado = mysqli_query($conexion, $consulta);
if ($resultado>0) {
    $_SESSION["mensaje"]="Alumno borrado correctamente";
} else {
    $_SESSION["mensaje"]="Error. No se ha podido borrar.";
}

header('Location:listado.php');

?>







