<?php

$modelo = "Nissan";
$valor = 500000.00;
$disponivel = true;
$adicionais = ["banco" => "couro", "motor" => "V8"];

echo $modelo;
echo "<br>";
echo "Valor R$ $valor";
echo "<br>";
if($disponivel) {
    echo "Veículo $modelo disponível para compra.";
} else {
    echo "Veículo $modelo indisponível para compra.";
}
echo "<br>";

print_r ($adicionais);

?>