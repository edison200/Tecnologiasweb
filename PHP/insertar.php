<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];
$latitud=$_POST["latitud"];
$longitud=$_POST["longitud"];

require("Connection.php");

$validar = "SELECT * FROM usuarios WHERE correo = '".$correo."'  ";
$resultado = mysqli_query($connection, $validar);
    if($resultado->num_rows >0){
        echo 0;
    }else{
        session_start();
        $_SESSION['correo']=$correo;
    $sql="INSERT INTO usuarios(nombre,apellido,correo,contraseña,latitud,longitud) VALUES ('$nombre','$apellido','$correo','$contraseña','$latitud','$longitud')";
    mysqli_query($connection,$sql);
        echo 1;
    }
?>