<?php
include("conexion.php");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$direccion1 = $_POST["direccion1"];
$direccion2 = $_POST["direccion2"];
$ciudad = $_POST["ciudad"];
$provincia = $_POST["provincia"];
$cod_postal = $_POST["cod_postal"];




$insertar = "INSERT INTO registro_usuarios (correo,contraseña,direccion1,direccion2,ciudad,provincia,cod_postal) VALUES ('$correo','$contraseña','$direccion1','$direccion2','$ciudad','$provincia','$cod_postal')";
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo "Error al registrarse";

}else{

	echo "\n Usuario registrado con exito";
}

mysqli_close($conexion);