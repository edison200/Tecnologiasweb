<?php
$host="localhost";
$user="root";
$pass="";
$db="farmacia";

$connection=mysqli_connect($host,$user,$pass,$db) or die ("Error la conexion servidor");
mysqli_set_charset($connection,"utf8");
?>