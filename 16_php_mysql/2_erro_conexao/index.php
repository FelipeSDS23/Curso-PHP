<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // if($conn->connect_errno) {
    //     echo "Erro na conexão! <br>";
    //     echo "Erro " . mysqli_connect_error();
    // }

    // if($conn->connect_errno) {
    //     echo "Erro na conexao! <br>";
    //     echo "Erro: " . $conn->connect_error;  
    // }

?>