<?php
            $link = mysql_connect("127.0.0.1", "root", "")
                OR DIE("Error de Conexion");
            mysql_select_db("servicio_tecnico", $link)
                OR DIE("Error al seleccionar base");

            $instruccion = "UPDATE equipos SET ";
            $valores = "ESTADO = 5, ";
            $valores .= "FECHARESPUESTA = '".$_POST["fecha"]."' WHERE NROORDEN = ".$_GET["NROORDEN"].";";

            mysql_query($instruccion.$valores);
            
            header('Location: index.php'); 
?>