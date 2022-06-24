<?php 

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tecnologia';
    $port = '3306';

    $connection = mysqli_connect($server, $user, $pass, $db, $port); 

    if($connection->connect_errno){
        echo "Falha ao conectar com mysql";
    }

    mysqli_set_charset($connection, "utf8");
    
?>