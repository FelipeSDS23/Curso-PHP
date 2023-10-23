<?php

    class Cachorro {

        function latir() {
            echo 'au au <br>';
        }

        function andar() {
            echo 'andando... <br>';
        }

    }

    $rex = new Cachorro;
    $lilica = new Cachorro;

    $rex->latir();
    $rex->andar();

    $lilica->latir();
    $lilica->andar();

?>