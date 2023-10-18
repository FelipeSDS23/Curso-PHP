<?php

    $str = "O rato roeu a roupa do rei de Roma";

    function contaLetrasA($str) {

        $letrasA = 0;

        for($i = 0; $i < strlen($str); $i++) {

            if($str[$i] === "a") {
                $letrasA++;
            }
    
        }

        return $letrasA;

    }

    echo contaLetrasA($str);


?>