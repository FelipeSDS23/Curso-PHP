<?php

    abstract class Teste {

        public static function testandoClasse() {

            echo "Este método é de uma classe abstrata <br>";
        
        }

        abstract public function testeAbs();

    }    

    // $t = new Teste;

    Teste::testandoClasse();

    class Nova extends teste {

        public function testeAbs() {
            echo "Teste método abstrato <br>";
        }

    }

?>