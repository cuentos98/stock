<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iniciocss.css">
    <title>Diagnosticar</title>
</head>
<body>
    <H3>Diagnostico</H3>

    <?php
    $aux = $_GET["NROORDEN"];

    $link = mysql_connect("127.0.0.1", "root", "")
        OR DIE("Error de Conexion");
    mysql_select_db("servicio_tecnico", $link)
        OR DIE("Error al seleccionar base");



    echo '<form method="post" action="diagnosticar_guardar.php?NROORDEN='.$aux.'">
        <label for="fecha">
            Fecha diagnostico: <input type="date" id="fecha" name="fecha" required>
        </label> <br>
        <label for="diagnostico">
            Diagnostico: <input type="text" id="diagnostico" name="diagnostico" required>
        </label> <br>
        <label for="costo">
            Costo total: <input type="text" id="costo" name="costo" required>
        </label> <br>
        <label for="sena">
            Seña: <input type="text" id="sena" name="sena" required>
        </label> <br>
        <label for="enviar">
            <button type="submit" id="enviar" name="enviar">Modificar</button>
        </label>
        <button onclick="location.href=\'index.php\'">Cancelar</button>
    </form>';


?>
    
</body>
</html>