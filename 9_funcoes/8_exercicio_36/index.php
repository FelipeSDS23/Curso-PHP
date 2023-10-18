<?php

function teste($arr) {

    $arr2 = [];

    foreach($arr as $a) {
        if($a > 7) {
            array_push($arr2, $a);
        }
    }

    return $arr2;
}

print_r(teste([1,2,3,4,5,8,9,12])); 

?>