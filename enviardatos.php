<?php
include("conexion.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$sql="INSERT INTO alumnos (codigo,nombre,apellido,dni,edad,genero) VALUES ('$codigo','$nombre','$apellido','$dni','$edad','$genero')";
if(mysqli_query($conexion,$sql)){
	header("location:mostrar_datos.php?mensaje=ALUMNO%20AGREGADO");
}else{
	echo "no se pudo guardar...";
}
?>
?>