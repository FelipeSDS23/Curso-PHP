<?php

    // CONECTA NO BANCO DE DADOS
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "login";

    // Create connection
    $conn = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // RECUPERA DADOS DO POST
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    // CONSULTA DB
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");

    $stmt->bind_param("ss", $email, $senha);

    $stmt->execute();

    $result = $stmt->get_result();

    $usuarioVerificado = $result->fetch_row();  

    // print_r($usuarioVerificado);

    $conn->close();

    if($usuarioVerificado) {
        include_once "main.html";
    } else {
        include_once "index.html";
    }

?>