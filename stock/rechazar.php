<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iniciocss.css">
    <title>Document</title>
</head>
<body>
    <H3>Rechazar Reparacion</H3>

    <?php
    $aux = $_GET["NROORDEN"];


    echo '<form method="post" action="rechazar_guardar.php?NROORDEN='.$aux.'">
        
        <label for="fecha">
            Fecha: <input type="date" id="fecha" name="fecha" required>
        </label> <br>

        <label for="enviar">
            <button type="submit" id="enviar" name="enviar">Confirmar</button>
        </label>
        <button onclick="location.href=\'index.php\'">Cancelar</button>
    </form>';
    ?>
</body>
</html>