<?php

    class Humano {

        public $nome = "Felipe";
        public $corCabelo = "Marron";
        public $corOlhos = "Castanhos";

        public function falar() {
            echo "$this->nome está falando...";
        }

    }


    class Professor extends Humano {

        public $materia = "Desenvolvimento web";

        private const NOTAS = [10, 5, 23, 18];

        public function falaNotas() {
            print_r(self::NOTAS);
        }

    }

    $felipe = new Professor();

    echo "O professor $felipe->nome tem cabelo $felipe->corCabelo e olhos $felipe->corOlhos e ensina $felipe->materia";
    echo "<br>";
    $felipe->falar();
    $felipe->falaNotas();
?>