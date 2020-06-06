<?php
include("conexion.php");

$nombre = $_POST["correo"];
$email = $_POST["contraseña"];


$insertar = "INSERT INTO prueba2 (correo,contraseña) VALUES ('$correo','$contraseña')";
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo "Error al registrarse";

}else{

	echo "\n Usuario registrado con exito";
}

mysqli_close($conexion);