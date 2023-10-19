<?php

    $cor = 'vermelho';
    $fabricante = 'bugatti';
    $motor = 'w16';
    $valor = 2000000;

    $carro = compact('cor', 'fabricante', 'motor', 'valor');

    $chaves = array_keys($carro);

    foreach($chaves as $chave){
        echo $carro[$chave] . "<br>";
    }

?>