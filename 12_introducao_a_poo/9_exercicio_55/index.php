<?php

    class Carro {

        public $nome;
        public $cor;
        public $portas;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel) {
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima() {
            return $this->velocidadeMaxima;
        }

    }

    $ferrari = new Carro;

    $ferrari->nome = "Ferrari";
    $ferrari->cor = "Vermelha";
    $ferrari->portas = 2;
    $ferrari->setVelocidadeMaxima(300);

    echo "A $ferrari->nome é $ferrari->cor e tem $ferrari->portas portas, chega a " . $ferrari->getVelocidadeMaxima() . "km/h";

?>