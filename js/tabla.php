<?php

    $conexion=mysqli_connect('localhost','root','','farmacia') or die ('Error en la base de datos');

    $sql="INSERT INTO usuarios VALUES(null,'".$_POST["correo"]."','".$_POST["contraseña"]."')";

    $resultado=mysqli_query($conexion,$sql) or die ('Error en el query');

    mysqli_close($conexion);
    echo 'Error';
?>  