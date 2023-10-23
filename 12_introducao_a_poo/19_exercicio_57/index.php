<?php

    class Cachorro {

        public $raca;
        public $porte;
        public $cor;

        function __construct($raca, $porte, $cor) {

            $this->raca = $raca;
            $this->porte = $porte;
            $this->cor = $cor;

        }

        public function mostraDetalhes() {

            echo "Raça: " . $this->raca . "<br>";
            echo "Porte: " . $this->porte . "<br>";
            echo "Cor: " . $this->cor . "<br>";

        }

    }

    $rex = new Cachorro("Pit Bull", "Grande", "Marrom");
    $rex->mostraDetalhes();
?>