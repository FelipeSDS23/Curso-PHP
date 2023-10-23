<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new humano;

    $turca = new Animal;

    if($marcos instanceof Humano) {
        echo "Marcos é um humano <br>";
    } else {
        echo "Marcos não é um humano <br>";
    }

    if($turca instanceof Humano) {
        echo "Turca é um humano <br>";
    } else {
        echo "Turca não é um humano <br>";
    }

    $pedro = new Professor;

    if($pedro instanceof Professor) {
        echo "Pedro é um professor <br>";
    } else {
        echo "Pedro não é um professor <br>";
    }

    if($pedro instanceof Humano) {
        echo "Pedro é um humano <br>";
    } else {
        echo "Pedro não é um humano <br>";
    }


    if($turca instanceof Professor) {
        echo "Turca é um professor <br>";
    } else {
        echo "Turca não é um professor <br>";
    }

    if($turca instanceof Humano) {
        echo "Turca é um humano <br>";
    } else {
        echo "Turca não é um humano <br>";
    }

?>