<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Preço do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Teto solar" id="teto">
            <label for="teto">Teto solar</label>
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Película" id="pelicula">
            <label for="pelicula">Película</label>
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado" id="blindado">
            <label for="blindado">Blindado</label>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>