<?php

    class Humano {

        public function falar() {
            echo "Olá";
        }

    }

    $felipe = new Humano;

    $teste = 10;

    if(is_object($felipe)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($felipe) . "<br>";

    if(method_exists($felipe, "falar")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }
    
    if(method_exists($felipe, "asd")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }

?>