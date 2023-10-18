<?php

    $frase = "este item está em promoção";

    $arrayFrase = str_split($frase, 19);

    $fraseAlterada = [];

    array_push($fraseAlterada, ucfirst($arrayFrase[0]));
    array_push($fraseAlterada, strtoupper($arrayFrase[1]));

    echo implode("", $fraseAlterada);
?>