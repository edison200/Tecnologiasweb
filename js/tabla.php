<?php

    $conexion=mysqli_connect('localhost','root','','formulario_prueba') or die ('Error en la base de datos');

    $sql="INSERT INTO medicamneto VALUES(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["correo"]."','".$_POST["pass"]."','".$_POST["genero"]."')";

    $resultado=mysqli_query($conexion,$sql) or die ('Error en el query');

    mysqli_close($conexion);