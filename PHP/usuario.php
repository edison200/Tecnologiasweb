<?php

$Id = $_POST["Id"];
require("Connection.php");

$query = "SELECT * FROM usuarios WHERE Id = '".$Id."'  ";
$data = array();
    $result = $connection->query($query);
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){ //tuplas
            $data[] = $row;
        }
    }
    echo json_encode($data);
    ?>