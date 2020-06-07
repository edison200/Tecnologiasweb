<?php
include("conexion.php");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$validar = "SELECT * FROM registro_usuarios WHERE correo = '".$correo."' AND contraseña = '".$contraseña."' ";
$resultado = mysqli_query($conexion, $validar);


if(!$resultado){
	echo "Usuario Valido";

}else{

	echo "\n Usuario Invalido";
}

mysqli_close($conexion);
