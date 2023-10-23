<?php

    class Car {

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca) {

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;

        }
    }

    $ferrari = new Car(4, "Vemelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca e é da cor $ferrari->cor <br>";

    $bmw = new Car(4, "Verde", "BMW");

    echo "O carro é da marca $bmw->marca e é da cor $bmw->cor";

?>