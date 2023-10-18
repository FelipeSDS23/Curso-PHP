<?php

    $arr = range(10, 45);

    foreach($arr as $num) {
        echo "<br>" . $num + 6;
        if($num + 6 > 30) {
            echo "O número é muito alto. <br>";
        }
    }

?>