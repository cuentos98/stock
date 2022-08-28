<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iniciocss.css">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <button id="botonAbreNav" onclick="abreNav()"><i class="fas fa-home"></i></button>

    <div id="sideNav">
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

    <H3>Agregar Equipo</H3>

    <form method="post" action="agregar_guardar.php">
        <label for="nombre">
            Nombre: <input type="text" id="nombre" name="nombre" required>
        </label> <br>
        <label for="telefono">
            Telefono: <input type="tel" id="telefono" name="telefono" required>
        </label> <br>
        <label for="fecha">
            Fecha: <input type="date" id="fecha" name="fecha" required>
        </label> <br>
        <label for="mail">
            Mail: <input type="email" id="mail" name="mail" required>
        </label> <br>
        <label for="tipo">
            Tipo de producto: <input type="text" id="tipo" name="tipo" required>
        </label> <br>
        <label for="marca">
            Marca de producto: <input type="text" id="marca" name="marca" required>
        </label> <br>
        <label for="modelo">
            Modelo de producto: <input type="text" id="modelo" name="modelo" required>
        </label> <br>
        <label for="nroserie">
            Nro de serie: <input type="text" id="nroserie" name="nroserie" required>
        </label> <br>
        <label for="falla">
            Falla segun cliente: <input type="text" id="falla" name="falla" required>
        </label> <br>
        <label for="enviar">
            <button type="submit" id="enviar" name="enviar">Agregar</button>
        </label>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
        <button onclick="location.href='index.php'">Cancelar</button>
    </form>

    <script src="handleNav.js"></script>
</body>
   
</html>