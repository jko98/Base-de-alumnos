<?php
include("conexion.php");
$codigo=$_GET['mensaje'];
$sql="DELETE FROM alumnos WHERE codigo='$codigo'";
if(mysqli_query($conexion,$sql)){
	header("location:mostrar_datos.php?mensaje=ALUMNO%20ELIMINADO");
}
//mysqli_close($conexion);
?>
