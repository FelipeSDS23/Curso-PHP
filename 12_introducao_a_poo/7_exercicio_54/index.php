<?php

    class Pessoa {

        public $nome;

        public $idade;

        function andar() {
            echo "$this->nome está andando... <br>";
        }

    }

    $felipe = new Pessoa();

    $felipe->nome = "Felipe";
    $felipe->idade = 24;
    $felipe->andar();

    $leticia = new Pessoa();

    $leticia->nome = "Letícia";
    $leticia->idade = 27;
    $leticia->andar();

    echo "$felipe->nome tem $felipe->idade anos <br>";
    echo "$leticia->nome tem $leticia->idade anos <br>";


?>