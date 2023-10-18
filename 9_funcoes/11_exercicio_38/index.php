<?php

    function itensMercado($itens) {

        return implode(", ", $itens);
        
    }

    echo itensMercado(["Banana", "Arroz", "Feijão"]);

?>