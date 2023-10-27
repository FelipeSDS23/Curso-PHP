<?php

    if(isset($_POST['Ingredientes'])) {

        $ingredientes = $_POST['Ingredientes'];

        print_r($ingredientes);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="Ingredientes[]" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="Ingredientes[]" value="Abobora"> Abobora
        </div>
        <div>
            <input type="checkbox" name="Ingredientes[]" value="Feijao"> Feijão
        </div>
        <div>
            <input type="checkbox" name="Ingredientes[]" value="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="Ingredientes[]" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar"> 
        </div>
    </form>
</body>
</html>