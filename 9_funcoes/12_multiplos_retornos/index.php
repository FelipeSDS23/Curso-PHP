<?php

    function alteraDados($nome, $idade) {

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alteraDados("Felipe", 24);

    print_r($dados);

    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1]";

?>