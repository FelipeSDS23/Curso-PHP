<?php

    $score = [
        'Felipe' => 1000,
        'Letícia' => 900,
        'Pedro' => 520,
        'Marcos' => 780,
        'Lorena' => 300,
        'Maria' => 640
    ];

    arsort($score);

    print_r($score);

    require_once 'ranking.html';

?>