<?php
include("Connection.php");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$validar = "SELECT * FROM usuarios WHERE correo = '".$correo."' AND contraseña = '".$contraseña."' ";
$resultado = mysqli_query($connection, $validar);

$data = array();
    if($resultado->num_rows >0){
        while($row = $resultado->fetch_assoc()){ //tuplas
            $data[] = $row;
    }
    header("location:/tecnologias%20web/html/inicio.html");
    }else{
    header("location:/tecnologias%20web/html/login.html");
    }
 
	echo json_encode($data);
    ?>
