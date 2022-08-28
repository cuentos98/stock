<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="iniciocss.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th id="tablaVacia"></th>
            <th>N° de orden</th>
            <th>Fecha de Inicio</th>
            <th>Nombre del cliente</th>
            <th>Tipo de producto</th>
            <th>Diagnóstico</th>
            <th>Costo total</th>
            <th>Seña</th>
            
        </tr>
        <?php
            $link = mysql_connect("127.0.0.1", "root", "")
                OR DIE("Error de Conexion");
            mysql_select_db("servicio_tecnico", $link)
                OR DIE("Error al seleccionar base");

            mysql_set_charset("utf8");

            $consulta = mysql_query("SELECT * FROM equipos WHERE ESTADO = 5");

            if ($consulta) {
                while ($registro = mysql_fetch_assoc($consulta)) {
                    echo "<tr>  <td><input type=\"button\" value=\"Eliminar\" onclick=\"location.href='eliminar.php?NROORDEN=".$registro["NROORDEN"]."'\">
                        
 
                    </td>";
                    echo "<td>".$registro["NROORDEN"]."</td>";
                    echo "<td>".$registro["FECHARESPUESTA"]."</td>";
                    echo "<td>".$registro["NOMBRECLIENTE"]."</td>";
                    echo "<td>".$registro["TIPOPRODUCTO"]."</td>";
                    echo "<td>".$registro["DIAGNOSTICO"]."</td>";
                    echo "<td>$".$registro["COSTOTOTAL"]."</td>";
                    echo "<td>$".$registro["SENA"]."</td> </tr>";
                }
                mysql_free_result($consulta);
            }
        ?>
    </table>

    
</body>
</html>