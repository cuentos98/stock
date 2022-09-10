<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Ventas</title>
</head>

<body>
    <div id="sideNav" class="navCerrado" tabindex="-1">
        <button id="botonHome" onclick="location.href='index.php'"><i class="fas fa-home"></i></button>

        <button id="botonCierraNav" onclick="cierraNav()"><i class="far fa-times-circle"></i></button>

        <ul class="menu">
            <li class="itemMenu"><a href="clientes.php">Clientes</a></li>
            <li class="itemMenu"><a href="proveedores.php">Proveedores</a></li>
            <li class="itemMenu"><a href="articulos.php">Artí­culos</a></li>
            <li class="itemMenu"><a href="compras.php">Compras</a></li>
            <li class="itemMenu"><a href="ventas.php">Ventas</a></li>
        </ul>
    </div>

    <div id="overlay" onclick="cierraNav()"></div>

    <div id="main">
        <button id="botonAbreNav" onclick="abreNav()"><i class="fas fa-home"></i></button>

        <h1 class="p-4">VENTAS</h1>

        <div class="container my-2">
            <div class="row">
                <div class="input-group justify-content-center">
                    <div class="input-group-text">
                        <a class="btn btn-dark px-3 py-0 fs-4 botonBack" href="#" role="button"><i class="fas fa-arrow-left"></i></a>
                    </div>

                    <div class="input-group-text ">
                        <input class="py-0 fs-4 inputBusqueda" type="text" placeholder="Buscar...">
                        <a class="btn btn-dark px-3 py-0 fs-4 botonBusqueda" href="#" role="button"><i class="fas fa-search"></i></a>
                    </div>
                    
                    <div class="input-group-text">
                    </div>

                    <div class="input-group-text">
                        <a class="btn btn-dark px-3 py-0 fs-4 botonNuevo" href="venta_agregar_selecCliente.php" role="button">Nueva venta</a>
                    </div>

                    <div class="input-group-text">
                        <a class="btn btn-dark px-3 py-0 fs-4 botonForward" href="#" role="button"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-3 gx-4 gy-4">
                <div class="col">
                    <div class="card h-100 m-auto border-0">
                        <div class="card-header py-0">
                            <p class="p-0 pt-1 m-0">Nro.<span class="p-0 m-0 fs-3"> 009 </span></p>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">Cliente: <span class="p-0 m-0 fs-5 fw-bold"> Pepe Ramos</span></p>
                            <p class="card-text">Fecha: <span class="p-0 m-0 fs-5 fw-bold"> 03/09/2022</span></p>
                            <p class="card-text">Importe: <span class="p-0 m-0 fs-5 fw-bold"> $1500.00</span></p>
                            <a class="btn btn-dark botonTarjetas px-4 py-1" href="#" role="button">Detalle</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 m-auto border-0">
                        <div class="card-header py-0">
                            <p class="p-0 pt-1 m-0">Nro.<span class="p-0 m-0 fs-3"> 009 </span></p>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">Cliente: <span class="p-0 m-0 fs-5 fw-bold"> Pepe Ramos</span></p>
                            <p class="card-text">Fecha: <span class="p-0 m-0 fs-5 fw-bold"> 03/09/2022</span></p>
                            <p class="card-text">Importe: <span class="p-0 m-0 fs-5 fw-bold"> $1500.00</span></p>
                            <a class="btn btn-dark botonTarjetas px-4 py-1" href="#" role="button">Detalle</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 m-auto border-0">
                        <div class="card-header py-0">
                            <p class="p-0 pt-1 m-0">Nro.<span class="p-0 m-0 fs-3"> 009 </span></p>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">Cliente: <span class="p-0 m-0 fs-5 fw-bold"> Pepe Ramos</span></p>
                            <p class="card-text">Fecha: <span class="p-0 m-0 fs-5 fw-bold"> 03/09/2022</span></p>
                            <p class="card-text">Importe: <span class="p-0 m-0 fs-5 fw-bold"> $1500.00</span></p>
                            <a class="btn btn-dark botonTarjetas px-4 py-1" href="#" role="button">Detalle</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 m-auto border-0">
                        <div class="card-header py-0">
                            <p class="p-0 pt-1 m-0">Nro.<span class="p-0 m-0 fs-3"> 009 </span></p>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">Cliente: <span class="p-0 m-0 fs-5 fw-bold"> Pepe Ramos</span></p>
                            <p class="card-text">Fecha: <span class="p-0 m-0 fs-5 fw-bold"> 03/09/2022</span></p>
                            <p class="card-text">Importe: <span class="p-0 m-0 fs-5 fw-bold"> $1500.00</span></p>
                            <a class="btn btn-dark botonTarjetas px-4 py-1" href="#" role="button">Detalle</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 m-auto border-0">
                        <div class="card-header py-0">
                            <p class="p-0 pt-1 m-0">Nro.<span class="p-0 m-0 fs-3"> 009 </span></p>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">Cliente: <span class="p-0 m-0 fs-5 fw-bold"> Pepe Ramos</span></p>
                            <p class="card-text">Fecha: <span class="p-0 m-0 fs-5 fw-bold"> 03/09/2022</span></p>
                            <p class="card-text">Importe: <span class="p-0 m-0 fs-5 fw-bold"> $1500.00</span></p>
                            <a class="btn btn-dark botonTarjetas px-4 py-1" href="#" role="button">Detalle</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 m-auto border-0">
                        <div class="card-header py-0">
                            <p class="p-0 pt-1 m-0">Nro.<span class="p-0 m-0 fs-3"> 009 </span></p>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">Cliente: <span class="p-0 m-0 fs-5 fw-bold"> Pepe Ramos</span></p>
                            <p class="card-text">Fecha: <span class="p-0 m-0 fs-5 fw-bold"> 03/09/2022</span></p>
                            <p class="card-text">Importe: <span class="p-0 m-0 fs-5 fw-bold"> $1500.00</span></p>
                            <a class="btn btn-dark botonTarjetas px-4 py-1" href="#" role="button">Detalle</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script src="handleNav.js"></script>
</body>

</html>