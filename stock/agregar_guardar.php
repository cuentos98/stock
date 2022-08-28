<?php
            $link = mysql_connect("127.0.0.1", "root", "")
                OR DIE("Error de Conexion");
            mysql_select_db("servicio_tecnico", $link)
                OR DIE("Error al seleccionar base");

            $instruccion = "INSERT INTO equipos (ESTADO,FECHAINGRESO,NOMBRECLIENTE,TELEFONO,MAIL,TIPOPRODUCTO,MARCA,MODELO,NROSERIE,FALLACLIENTE) VALUES";
            $valores = "0, ";
            $valores .= "'".$_POST["fecha"]."', ";
            $valores .= "'".$_POST["nombre"]."', ";
            $valores .= "'".$_POST["telefono"]."', ";
            $valores .= "'".$_POST["mail"]."', ";
            $valores .= "'".$_POST["tipo"]."', ";
            $valores .= "'".$_POST["marca"]."', ";
            $valores .= "'".$_POST["modelo"]."', ";
            $valores .= "'".$_POST["nroserie"]."', ";
            $valores .= "'".$_POST["falla"]."'";

            mysql_query($instruccion."(".$valores.")");

            header('Location: index.php'); 
?>