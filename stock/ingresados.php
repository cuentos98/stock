<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="iniciocss.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>

    <button id="botonAbreNav" onclick="abreNav()"><i class="fas fa-home"></i></button>

    <div id="sideNav" class="navCerrado">
        <button id="botonHome" onclick="location.href='index.php'"><i class="fas fa-home"></i></button>
        
        <button id="botonCierraNav" onclick="cierraNav()"><i class="far fa-times-circle"></i></button>

        <ul class="menu">
            <li class="itemMenu"><a href="ingresar.php">Clientes</a></li>
            <li class="itemMenu"><a href="ingresados.php">Ventas</a></li>
            <li class="itemMenu"><a href="diagnosticados.php">Stock</a></li>
            <li class="itemMenu"><a href="enreparacion.php">Compras</a></li>
            <li class="itemMenu"><a href="reparados.php">Proveedores</a></li>
        </ul>
    </div>

<table>
        <tr>
            <th id="tablaVacia"></th>
            <th>N° de orden</th>
            <th>Fecha de ingreso</th>
            <th>Nombre cliente</th>
            <th>Telefono</th>
            <th>Mail</th>
            <th>Tipo de producto</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>N° de serie</th>
            <th>Falla segun cliente</th>
        </tr>
        <?php
            /*$link = mysql_connect("127.0.0.1", "root", "")
                OR DIE("Error de Conexion");
            mysql_select_db("servicio_tecnico", $link)
                OR DIE("Error al seleccionar base");

            mysql_set_charset("utf8");

            $consulta = mysql_query("SELECT * FROM equipos WHERE ESTADO = 0");

            if ($consulta) {
                while ($registro = mysql_fetch_assoc($consulta)) {
                    echo "<tr>  <td><input type=\"button\" value=\"Eliminar\" onclick=\"location.href='eliminar.php?NROORDEN=".$registro["NROORDEN"]."'\"><input type=\"button\" value=\"Diagnosticar\" onclick=\"location.href='diagnosticar.php?NROORDEN=".$registro["NROORDEN"]."'\"></td>";
                    echo "<td>".$registro["NROORDEN"]."</td>";
                    echo "<td>".$registro["FECHAINGRESO"]."</td>";
                    echo "<td>".$registro["NOMBRECLIENTE"]."</td>";
                    echo "<td>".$registro["TELEFONO"]."</td>";
                    echo "<td>".$registro["MAIL"]."</td>";
                    echo "<td>".$registro["TIPOPRODUCTO"]."</td>";
                    echo "<td>".$registro["MARCA"]."</td>";
                    echo "<td>".$registro["MODELO"]."</td>";
                    echo "<td>".$registro["NROSERIE"]."</td>";
                    echo "<td>".$registro["FALLACLIENTE"]."</td> </tr>";
                }
                mysql_free_result($consulta);
            }*/
        ?>
    </table>

    <script src="handleNav.js"></script>
</body>
</html>