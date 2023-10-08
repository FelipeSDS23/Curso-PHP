<?php

class Pessoa {
    function falar() {
        echo "Olá pessoal";
    }
}

$felipe = new Pessoa();

$felipe->nome = "Felipe";

echo $felipe->nome;

echo "<br>";

$felipe->falar();

?>