<?php
    $link = mysql_connect("127.0.0.1", "root", "")
        OR DIE("Error de Conexion");
    mysql_select_db("servicio_tecnico", $link)
        OR DIE("Error al seleccionar base");

    mysql_query("DELETE FROM equipos WHERE NROORDEN ='".$_GET["NROORDEN"]."'");

    header('Location: index.php'); 
?>