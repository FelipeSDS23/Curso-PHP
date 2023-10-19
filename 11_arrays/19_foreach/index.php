<?php

    $joao = [
        'nome' => 'João',
        'idade' => 30,
        'profissao' => 'Programador'
    ];

    $maria = [
        'nome' => 'Maria',
        'idade' => 23,
        'profissao' => 'Médica'
    ];

    foreach($joao as $carac => $value) {

        echo "$carac => $value <br>";
        
    }

    foreach($maria as $carac => $value) {

        echo "$carac => $value <br>";

    }

?>