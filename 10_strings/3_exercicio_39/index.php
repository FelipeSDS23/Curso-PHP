<?php

    function teste($arr) {
        
        $itens = [];

        foreach($arr as $key => $value) {
            
            if($value > 10) {
                array_push($itens, $key);
            }

        }

        return $itens;

    }

    $arr = ["Carro" => 1000, "sofá" => 500, "cafeteira" => 9];

    print_r(teste($arr));

?>