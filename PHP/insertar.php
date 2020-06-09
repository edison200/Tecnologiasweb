<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];

require("Connection.php");

$sql="INSERT INTO usuarios(nombre,apellido,correo,contraseña) VALUES ('$nombre','$apellido','$correo','$contraseña')";
mysqli_query($connection,$sql);
echo 1;
?>