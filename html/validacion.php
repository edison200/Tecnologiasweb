<?php
include("conexion.php");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$validar = "SELECT * FROM registro_usuarios WHERE correo = '".$correo."' AND contraseña = '".$contraseña."' ";
$resultado = mysqli_query($conexion, $validar);


$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:pedidos.html");
}else{
	echo "Error de autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);