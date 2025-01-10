<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Inicio de Pagina -->
    <div class="header container-fluid container-sm">
        <!-- Actividad de la Pagina (Abierto-Cerrado) -->
        <div class="horario container-sm">
            <button type="button" class="btn btn-light">
                <!-- Logo de Reloj -->
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                </svg>
                <!--Modificar span Respecto al Horario-->
                <span class="Actividad" name="Horario">Abierto</span>

                <!-- Cambiar a Color verde el icono al Abrir y Cambiar a Rojo al Cerrar-->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="Actividad bi bi-record-circle" viewBox="0 0 16 16" name="icono-actividad">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                </svg>
            </button>
        </div>
        <div class="titulo">
            <img src="./source/Chilango_Street_logo.jpg" alt="ChilangoStreet-logo" class="logo">
            <h3 class="titulo">ChilangoStreet</h3>
        </div>
    </div>

    <!-- Filtrar Productos por Categoria al Principio de Pagina -->
    <div class="container-fluid container-sm p-2 ">
        <ul class="nav nav-tabs fs-4">
            <li class="nav-item">
                <a class="nav-link" href="#Menu-Tacos">Tacos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Menu-Tortas">Tortas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Menu-Extras">Extras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Menu-Bebidas">Bebidas</a>
            </li>
        </ul>
    </div>
    <!-- Categoria: Tacos  Formato de Filas de 2 columnas-->
    <div id="Menu-Tacos" class="container-fluid container-sm">
        <div class="Categoria text-center p-4 bg-info rounded-5">
            <h4 class="fst-italic">TACOS:<span name="Precio" class="Precio fw-bold fs-2" id="Precio-Tacos"> 22 </span>MXN</h4>
        </div>
        <div class="row row-cols-2 p-4 container-sm">

            <div class="col-6 Tacos d-flex py-4">
                <img src="./source//MENU/Tacos.jpg.png" alt="Tacos" class="Tacos-Menu rounded-5" width="150px" height="170px">
                <div class="Descripcion px-3" style="max-width: 200px;">
                    <h3>Tacos</h3>
                    <p class="Descripcion fs-5">Proteína de elección, cebolla caramelizada, nopales, papas fritas</p>
                </div>
            </div>
            <div class="col-6 Extras d-flex py-4">
                <img src="./source//MENU/postres.webp" alt="Postres" class="Extras-Menu rounded-5" width="150px" height="170px">
                <div class="Descripcion px-3" style="max-width: 170px;">
                <h3>Extras</h3>
                <p class="Descripcion fs-5">Postres y Complementos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Categoria: Tortas Formato de Filas de 2 Columnas -->
    <div id="Menu-Tortas" class="container-fluid container-sm">
        <div class="Categoria text-center p-4 bg-info rounded-5">
            <h4 class="fst-italic">TORTAS:<span name="Precio" class="Precio fw-bold fs-2" id="Precio-Tortas"> 25</span> MXN</h4>
        </div>
        <div class="row row-cols-2 p-4 container-sm">

            <div class="col-6 Tortas d-flex py-4">
                <img src="./source//MENU/tortas1.jpg.png" alt="Torta1" class="Tortas-Menu rounded-5" width="150px" height="170px">
                <div class="Descripcion px-3" style="max-width: 200px;">
                    <h3>Torta Sencilla</h3>
                    <p class="Descripcion fs-5">Proteína de elección, mayonesa, frijoles, jitomate, cebolla caramelizada</p>
                </div>
            </div>
            <div class="col-6 Tortas d-flex py-4">
                <img src="./source//MENU/tortas2.jpg.png" alt="Torta2" class="Tortas-Menu rounded-5" width="150px" height="170px">
                <div class="Descripcion px-3" style="max-width: 220px;">
                    <h3>Gorditas</h3>
                    <p class="Descripcion fs-5">Tortilla de masa gruesa rellena de chicharrón + proteína de tu elección, lechuga, queso y crema</p>
                </div>      
            </div>
            <div class="col-6 Tortas d-flex py-4">
                <img src="./source//MENU/Tortas3.jpg.png" alt="Torta3" class="Tortas-Menu rounded-5" width="150px" height="170px">
                <div class="Descripcion px-3" style="max-width: 250px;">
                    <h3>Pambazo</h3>    
                    <p class="Descripcion fs-5">Pan asado con salsa de chiles secos, relleno de papa con longaniza + proteína de elección, lechuga, queso y crema</p>
                </div>
            </div>
            <div class="col-6 Tortas d-flex py-4">
                <img src="./source//MENU/Tortas4.jpg.png" alt="Torta4" class="Tortas-Menu rounded-5" width="150px" height="170px">
                <div class="Descripcion px-3" style="max-width: 200px;">
                <h3>Huarache</h3>
                <p class="Descripcion fs-5">Tortilla alargada con frijoles, proteína de elección, nopales, queso y crema</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Categoria: Extras Formato de 2 columnas-->
    <div id="Menu-Extras" class="container-fluid container-sm text-center">
        <div class="Categoria text-center p-4 bg-info rounded-5">
            <h4 class="fst-italic">EXTRAS</h4>
        </div>
        <div class="row row-cols-2 p-4">

            <div class="col-6 Extras">
                <h3>Papas a la Francesa</h3>
                <hr>
                <img src="./source//MENU/papas.jpeg" alt="Papas Francesa" class="Extras-Menu rounded-5" width="200px" height="200px">
                <p class="Descripcion fs-5 py-3">Papas a la Francesa con Sal,Catsup,Queso Amarillo y Salsa</p>
                <span name="Precio" class="Precio fw-bold fs-5" id="Precio-Papas">40 MXN</span>
            </div>
            <div class="col-6 Extras">
                <h3>Postres</h3>
                <hr>
                <img src="./source//MENU/postres.webp" alt="Postres" class="Extras-Menu rounded-5" width="200px" height="200px">
                <p class="Descripcion fs-5 py-3">Yugurt con Gelatina o Flanes</p>
                <span name="Precio" class="Precio fw-bold fs-5" id="Precio-Postres">30 MXN</span>
            </div>
        </div>
    </div>
    <!-- Categoria: Bebidas Formato de 3 columnas-->
    <div id="Menu-Bebidas" class="container-fluid container-sm text-center">
        <div class="Categoria p-4 bg-info rounded-5">
            <h4 class="fst-italic">BEBIDAS:<span name="Precio" class="Precio fw-bold fs-2" id="Precio-Bebidas"> 25</span> MXN</h4>
        </div>
        <div class="row row-cols-3 p-4">

            <div class="col-4 Bebidas">
                <h3>Agua del Dia</h3>
                <hr>
                <img src="./source//MENU/agua_del_dia.avif" alt="Agua del Dia" class="Bebidas-Menu rounded-3" width="200px" height="200px">
                <p class="Descripcion fs-5 py-3">Agua del Dia (500 ml)</p>
            </div>
            <div class="col-4 Bebidas">
                <h3>Refrescos</h3>
                <hr>
                <img src="./source//MENU/refresco.jpeg" alt="Refrescos" class="Bebidas-Menu rounded-3" width="200px" height="200px">
                <p class="Descripcion fs-5 py-3">Refrescos de (355 ml)</p>
            </div>
            <div class="col-4 Bebidas">
                <h3>Jugos</h3>
                <hr>
                <img src="./source//MENU/boing.jpg" alt="Jugos" class="Bebidas-Menu rounded-3" width="200px" height="200px">
                <p class="Descripcion fs-5 py-3">Boing de (354 ml)</p>
            </div>
        </div>
    </div>

</body>

</html>