
<?php
include("conexion.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$sql="UPDATE alumnos SET nombre='$nombre',apellido='$apellido',dni='$dni',edad='$edad',genero='$genero' WHERE codigo='$codigo'";
if(mysqli_query($conexion,$sql)){
	header("location:mostrar_datos.php?mensaje=ALUMNO%20ACTUALIZADO");
}
?>
