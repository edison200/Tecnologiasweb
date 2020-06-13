<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];
$latitud=$_POST["latitud"];
$longitud=$_POST["longitud"];

require("Connection.php");

$sql="INSERT INTO usuarios(nombre,apellido,correo,contraseña,latitud,longitud) VALUES ('$nombre','$apellido','$correo','$contraseña','$latitud','$longitud')";
mysqli_query($connection,$sql);
echo 1;
?>