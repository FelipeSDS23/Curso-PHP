<?php

    interface Caracteristicas {

        const nome = "Felipe";

        public function falar();

    }

    class Humano implements Caracteristicas {

        public $idade= 29;

        public function falar() {
            echo "Olá mundo! <br>";
        }

        public function dizerNome() {
            echo "Meu nome é " . self::nome . "<br>";
        }

    }

    $felipe = new Humano;

    $felipe->falar();
    $felipe->dizerNome();

?>