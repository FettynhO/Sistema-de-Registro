<?php 

    $dbHost = "Localhost";
    $dbUsername = "root";
    $dbPassword = " ";
    $dbName = "formulario-fernando";

    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if($conexao->connect_error)
    { 
        echo "Connect Error";
    }
    else
    {
        echo "Connected";
    }
?>