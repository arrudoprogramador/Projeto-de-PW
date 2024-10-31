<?php
    $hostname = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "bd_loja";

    $mysqli = new mysqli($hostname, $username, $password, $database);

    if($mysqli -> connect_errno){
        echo "Falha ao conetar: (" . $mysqli->connect_errno . ") ". $mysqli -> connect_error;
    }else{
        echo "Conexão bem-sucedida!";
    }

    $mysqli->close();
?>
