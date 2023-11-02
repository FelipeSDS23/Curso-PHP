<?php

    include_once "helpers/url.php";
    include_once "header.php";

    //RECUPERA DADOS DO BANCO DE DADOS

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "clientes";

    $conn = new mysqli($host, $user, $pass, $db);

    $queryConsulta = "SELECT * FROM cliente";

    $result = $conn->query($queryConsulta);

    $conn->close();

    $clientes = $result->fetch_all();

    // print_r($clientes);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        * {
            font-family: 'Ubuntu', sans-serif;
        }

        .tela-tabela {
            background-color: #fff;
            max-width: 1400px;
            margin: auto;
        }

        table {
            border-collapse: collapse;    
            text-align: center;
            font-size: 12.5px;
            margin: auto;
        }

        table th, td, tr {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px 2px
        }

        tr:nth-child(odd) {
            background: #ccc;
        }

        tr:nth-child(1) {
            background: #99f;
        }
    </style>
</head>
<body>
    <div class="tela-tabela">
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>DDD</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>CEP</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>

            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente['0']; ?></td>
                    <td><?= $cliente['1']; ?></td>
                    <td><?= $cliente['2']; ?></td>
                    <td><?= $cliente['3']; ?></td>
                    <td><?= $cliente['4']; ?></td>
                    <td><?= $cliente['5']; ?></td>
                    <td><?= $cliente['6']; ?></td>
                    <td><?= $cliente['7']; ?></td>
                    <td><?= $cliente['8']; ?></td>
                    <td><?= $cliente['9']; ?></td>
                    <td><?= $cliente['10']; ?></td>
                    <td><?= $cliente['11']; ?></td>
                    <td><?= $cliente['12']; ?></td>
                    <td><?= $cliente['13']; ?></td>
                    <td><?= $cliente['14']; ?></td>
                    <td><?= $cliente['15']; ?></td>
                </tr>
            <?php endforeach; ?>
       
        </table>
    </div>
</body>
</html>