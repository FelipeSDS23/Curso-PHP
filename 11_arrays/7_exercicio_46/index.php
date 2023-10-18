<?php

    $arr = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    for($i = 0; $i < count($arr); $i++) {

        foreach($arr[$i] as $num) {
            echo $num . "<br>";
        }
        
        echo "Mundando de array <br>";

    }

?>