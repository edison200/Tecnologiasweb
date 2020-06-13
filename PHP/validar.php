<?php
include("Connection.php");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$validar = "SELECT * FROM usuarios WHERE correo = '".$correo."' AND contraseña = '".$contraseña."' ";
$resultado = mysqli_query($connection, $validar);


$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:/tecnologias%20web/html/pedidos.html");
}else{

	header ("location:/tecnologias%20web/html/login.html");
}


mysqli_close($conexion);