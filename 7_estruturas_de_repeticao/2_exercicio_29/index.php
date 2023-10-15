<?php

$x = 10;

$arr = [];

while($x <= 100) {

    if($x === 30) {
        $x = $x + 10;
        continue;
    }

    array_push($arr, $x);

    $x = $x + 10;

}

print_r($arr);

?>