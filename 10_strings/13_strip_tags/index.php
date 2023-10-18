<?php

    $textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textoHtml;

    $salvarTextiBanco = strip_tags($textoHtml);

    echo $salvarTextiBanco;

?>