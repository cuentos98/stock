<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Nueva Venta</title>
</head>

<body>
    <div id="sideNav" class="navCerrado" tabindex="-1">
        <button id="botonHome" onclick="location.href='index.php'"><i class="fas fa-home"></i></button>

        <button id="botonCierraNav" onclick="cierraNav()"><i class="far fa-times-circle"></i></button>

        <ul class="menu">
            <li class="itemMenu"><a href="clientes.php">Clientes</a></li>
            <li class="itemMenu"><a href="proveedores.php">Proveedores</a></li>
            <li class="itemMenu"><a href="articulos.php">ArtÃ­culos</a></li>
            <li class="itemMenu"><a href="compras.php">Compras</a></li>
            <li class="itemMenu"><a href="ventas.php">Ventas</a></li>
        </ul>
    </div>

    <div id="overlay" onclick="cierraNav()"></div>

    <div id="main">
        <button id="botonAbreNav" onclick="abreNav()"><i class="fas fa-home"></i></button>

        <h1 class="p-4">NUEVA VENTA</h1>

        <form class="container mb-5">
            <div class="row row-cols-2">
                <div class="col text-center">
                    <p class="card-text">Cliente: <span class="p-0 m-0 fs-3 fw-bold"> Pepe Ramos</span></p>
                </div>
                <div class="col text-center">
                    <p class="card-text">Fecha: <span class="p-0 m-0 fs-3 fw-bold"> 03/09/2022</span></p>
                </div>
            </div>
        </form>


        <form class="container mb-3" action="" id="articulos">
            <input type="number" value=0 id="cantidad">

            <div class="row row-cols-4 px-5 py-3 gy-2">
                <div class="col-6 text-center">Articulo</div>
                <div class="col-2 text-center">Cantidad</div>
                <div class="col-3 text-center">Precio Unitario</div>
                <div class="col-1 text-center"></div>

                <div class="col-6 text-center">
                    <select class="form-select" id="articulo">
                        <option value="" disabled selected></option>
                        <option value="1">Articulo 1</option>
                        <option value="2">Articulo 2</option>
                        <option value="3">Articulo 3</option>
                    </select>
                </div>
                <div class="col-2 text-center">
                    <input class="form-control w-75 m-auto" type="number" id="cantidad">
                </div>
                <div class="col-3 text-center">
                    <input class="form-control w-75 m-auto" type="number" value=650 id="precio" disabled></input>
                </div>
                <div class="col-1 text-center">
                    <button type="button" onclick="sumarArticulo()" class="btn btn-dark botonTarjetas px-4 py-1 h-100 text-center border-0" role="button"><i class="fas fa-plus"></i></button>
                </div>
            </div>
            <div class="row text-center m-auto">
                <div class="col">Items Agregados</div>
            </div>
            <div class="row row-cols-4 px-5 py-3 gy-2" id="agregados">
                <div class="col-6 text-center">
                    <select class="form-select" id="articulo1" disabled>
                        <option value="1">Articulo 1</option>
                    </select>
                </div>
                <div class="col-2 text-center">
                    <input class="form-control w-75 m-auto" type="number" value=1 disabled>
                </div>
                <div class="col-3 text-center">
                    <input class="form-control w-75 m-auto" value=650 disabled></input>
                </div>
                <div class="col-1 text-center">
                    <button type="button" onclick="eliminarArticulo()" class="btn btn-dark botonTarjetas px-4 py-1 h-100 text-center border-0" role="button"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="text-center my-5">
                <button type="submit" id="enviar" name="enviar" class="btn mx-3 btn-info botonForm"><i class="fas fa-check"></i></button>
                <button type="button" onclick="location.href = 'venta_agregar_selecCliente.php'" class="btn mx-3 btn-danger botonForm"><i class="fas fa-times"></i></button>
            </div>
        </form>

    </div>

    <script src="handleNav.js"></script>
    <script src="cargaArticulos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>