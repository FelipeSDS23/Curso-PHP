<?php

$x = 5;

switch($x) {
    case 0:
        echo "X é igual a 0 <br>";
        break;
    case 1:
        echo "X é igual a 1 <br>";
        break;
    default:
        echo "X não é igual a nenhum dos valores mencionados <br>";
}

$x = "Felipe";

switch($x) {
    case "Felipe":
        echo "X é igual a Felipe <br>";
        break;
    case "João":
        echo "X é igual a João <br>";
        break;
    default:
        echo "X não é igual a nenhum dos valores mencionados <br>";
}

?>