<?php
            $link = mysql_connect("127.0.0.1", "root", "")
                OR DIE("Error de Conexion");
            mysql_select_db("servicio_tecnico", $link)
                OR DIE("Error al seleccionar base");

            $instruccion = "UPDATE equipos SET ";
            $valores = "ESTADO = 1, ";
            $valores .= "FECHADIAGNOSTICO = '".$_POST["fecha"]."', ";
            $valores .= "DIAGNOSTICO = '".$_POST["diagnostico"]."', ";
            $valores .= "COSTOTOTAL = '".$_POST["costo"]."', ";
            $valores .= "SENA = '".$_POST["sena"]."' WHERE NROORDEN = ".$_GET["NROORDEN"].";";

            mysql_query($instruccion.$valores);
            
            header('Location: index.php'); 
?>