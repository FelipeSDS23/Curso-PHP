<?php

    $arr = range(0, 20, 1);
    shuffle($arr);

    function ordenarNumeros($arr) {
        sort($arr);

        return ($arr);
    }

    print_r(ordenarNumeros($arr));

?>