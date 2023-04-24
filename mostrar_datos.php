<?php
include("conexion.php");
$sql="SELECT * FROM alumnos";
$informacion=mysqli_query($conexion,$sql);
echo '<body style="background: rgb(181,60,107);
background: linear-gradient(90deg, rgba(181,60,107,1) 15%, rgba(62,69,126,1) 51%, rgba(0,212,255,1) 100%); color:white">';
echo "<H1><center>DATOS OBTENIDOS DESDE PHP</center></H1>";
echo "<table border=1 align=center>";
echo "<thead>";
echo "<tr>";
echo "<th scope=col>Cod Alumno</th>";
echo "<th scope=col>Nombre</th>";
echo "<th scope=col>Apellido</th>";
echo "<th scope=col>DNI</th>";
echo "<th scope=col>Edad</th>";
echo "<th scope=col>Genero</th>";
echo "<th scope=coel colspan=2>Opciones</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($registro=mysqli_fetch_row($informacion)){
	echo "<tr>";
    foreach ($registro as $dato) {
    	echo "<td>$dato</td>";
        
    }
        echo "<td><a href='editar.html'><center><img src='boton-actualizar.png' width=20px></center></a></td>";
       echo "<td><a href='borrar.php?mensaje=$registro[0]'><center><img src='eliminar.png' width=20px></center></a></td>";
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "<br>";
echo "<center>".$_GET['mensaje']."</center>";
echo "<br>";
echo "<a href='formulario.html'>Agregar nuevo alumno</a>";
?>