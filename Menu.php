<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/Menu.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    

    
</head>

<body>
    <!-- Header Pagina -->
    <header class="main-header container">

        <div class="image-top-section">
            <!-- Boton (Modal)-->
            <button type="button" class="btn-top-header me-3 p-1" id="btn-top-Horario" data-bs-toggle="modal" data-bs-target="#Horario">
                <!-- Logo de Reloj -->
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                </svg>
                <!--Modificar span Respecto al Horario-->
                <span class="Actividad mx-2" name="Horario">Abierto</span>

                <!-- Cambiar a Color verde el icono al Abrir y Cambiar a Rojo al Cerrar-->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="Actividad bi bi-record-circle" viewBox="0 0 16 16" name="icono-actividad">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                </svg>
            </button>
            <img src="./source/Header-2.png" class="img-main-header rounded-bottom-3" alt="header-img">
        </div>

        <div class="logo-bottom-section">
            <!-- Logo y Titulo -->
            <div class="left-area-logo">
                <div class="logo-img-area">
                    <img src="./source/Chilango_Street_logo.jpg" class="logo-bottom-img rounded-3" alt="Logo">
                </div>
                <div class="logo-text-area mt-3">
                    <h1 class="Titulo">Chilango'Street</h1>
                    <button class="btn-info px-4" data-bs-toggle="modal" data-bs-target="#Horario">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="current-color" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <hr>
    </header>

    <!-- Navegacion de Categoria -->
    <div class="container-md">
        <!-- Filtrar Productos por Categoria al Principio de Pagina -->
        <ul class="nav fs-4 d-flex justify-content-center">
            <li>
                <a class="p-3 nav-item rounded-bottom-4" href="#Menu-Tacos">Tacos</a>
            </li>
            <li>
                <a class="p-3 nav-item rounded-bottom-4" href="#Menu-Tortas">Antojitos</a>
            </li>
            <li>
                <a class="p-3 nav-item rounded-bottom-4" href="#Menu-Extras">Extras</a>
            </li>
            <li>
                <a class="p-3 nav-item rounded-bottom-4" href="#Menu-Bebidas">Bebidas</a>
            </li>
        </ul>
        <hr>
    </div>

    <!-- Main: Productos/Inventario -->
    <main>

        <!-- Categoria: Tacos  Formato de Filas de 2 columnas-->
        <div id="Menu-Tacos" class="container my-2">
            <!-- Titulo de Categoria -->
            <div class="Categoria p-4 rounded-5 text-center">
                <h4 >TACOS:<span class="fw-bold fs-2"> 22 </span>MXN</h4>
            </div>

            <div class="container my-2">
                <div class="row">
                    <!-- 100% del espacio (Unico Producto) -->
                    <div class="col-12 pe-2 my-2">
                        <div class="Tacos">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 d-flex p-3">
                                        <img src="./source//MENU/Tacos.jpg.png" alt="Tacos" class="Tacos-Menu rounded-5" width="150px" height="170px">
                                        <div class="Descripcion px-3">
                                            <h3>Tacos</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Proteína de tu elección, cebolla caramelizada, nopales y papas fritas</p>
                                        </div>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <a role="button" id="btn-Tacos-1" class="btn btn-ver" data-bs-toggle="modal" data-bs-target="#M-Tacos-1">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categoria: Antojitos Formato de Filas de 2 Columnas -->
        <div id="Menu-Tortas" class="container my-2">
            <!-- Titulo de Categoria -->
            <div class="Categoria p-4 rounded-5">
                <h4>Antojitos</h4>
            </div>

            <div class="container my-2">
                <div class="row">
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 col-md-6 d-flex pe-2 my-2">
                        <div class="Tortas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 d-flex p-3">
                                        <img src="./source//MENU/tortas1.jpg.png" alt="Torta1" class="Tortas-Menu rounded-5" width="150px" height="170px">
                                        <div class="Descripcion px-3">
                                            <h3>Torta Sencilla</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Proteína de tu elección, mayonesa, frijoles, jitomate y cebolla caramelizada</p>
                                        </div>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <p class="fs-5"> <span class="fs-3 fw-bold">25</span> MXN </p>
                                        <a role="button" id="btn-Tortas-1" class="btn btn-ver" style="max-height : 40px;"  data-bs-toggle="modal" data-bs-target="#M-Torta-1">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 col-md-6 d-flex ps-2 my-2">
                        <div class="Tortas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 d-flex p-3">
                                        <img src="./source//MENU/tortas2.jpg.png" alt="Torta2" class="Tortas-Menu rounded-5" width="150px" height="170px">
                                        <div class="Descripcion px-3">
                                            <h3>Gorditas (Martes)</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Tortilla de masa gruesa rellena de chicharrón + proteína de tu elección, lechuga, queso y crema</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center p-3">
                                        <p class="fs-5"> <span class="fs-3 fw-bold">22</span> MXN </p>
                                        <a role="button" id="btn-Tortas-2" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Torta-2">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 col-md-6 d-flex pe-2 my-2">
                        <div class="Tortas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 d-flex p-3">
                                        <img src="./source//MENU/Tortas3.jpg.png" alt="Torta3" class="Tortas-Menu rounded-5" width="150px" height="170px">
                                        <div class="Descripcion px-3">
                                            <h3>Pambazo (Miercoles)</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Pan asado con salsa de chiles secos, relleno de papa con longaniza + proteína de tu elección, lechuga, queso y crema</p>
                                        </div>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <p class="fs-5"> <span class="fs-3 fw-bold">25</span> MXN </p>
                                        <a role="button" id="btn-Tortas-3" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Torta-3">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 col-md-6 d-flex ps-2 my-2">
                        <div class="Tortas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 d-flex p-3 mb-2">
                                        <img src="./source//MENU/Tortas4.jpg.png" alt="Torta4" class="Tortas-Menu rounded-5" width="150px" height="170px">
                                        <div class="Descripcion px-3">
                                            <h3>Huarache (Jueves)</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Tortilla alargada con frijoles, proteína de tu elección, nopales, queso y crema</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center p-3 mt-4">
                                        <p class="fs-5"> <span class="fs-3 fw-bold">22</span> MXN </p>
                                        <a role="button" href="#0" id="btn-Tortas-4" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Torta-4">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categoria: Extras Formato de 2 columnas-->
        <div id="Menu-Extras" class="container my-2">
            <!-- Titulo de Categoria -->
            <div class="Categoria p-4 rounded-5">
                <h4>EXTRAS</h4>
            </div>

            <div class="container my-2">
                <div class="row">
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 col-md-6 pe-2 my-2">
                        <div class="Extras">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 text-center p-2">
                                        <h3>Papas a la Francesa</h3>
                                        <hr>
                                        <img src="./source//MENU/papas.jpeg" alt="Papas Francesa" class="Extras-Menu rounded-5" width="200px" height="200px">
                                        <p class="Descripcion fs-5 my-3">Papas a la Francesa con Sal,Catsup,Queso Amarillo y Salsa</p>
                                        <p class="fs-5"><span class="fs-3 fw-bold" id="Precio-Papas">40 </span> MXN</p>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <a role="button" id="btn-Extras-1" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Extras-1">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 col-md-6 ps-2 my-2">
                        <div class="Extras">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 text-center p-2">
                                        <h3>Postres</h3>
                                        <hr>
                                        <img src="./source//MENU/postres.webp" alt="Postres" class="Extras-Menu rounded-5" width="200px" height="200px">
                                        <p class="Descripcion fs-5 my-3">Yugurt con Gelatina y Flan</p>
                                        <p class="fs-5"><span class="fs-3 fw-bold" id="Precio-Postres">25</span> MXN</p>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <a role="button" id="btn-Extras-2" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Extras-2">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categoria: Bebidas Formato de 3 columnas-->
        <div id="Menu-Bebidas" class="container my-2">
            <!-- Titulo de Categoria -->
            <div class="Categoria p-4 rounded-5">
                <h4>BEBIDAS:<span class="fw-bold fs-2"> 25</span> MXN</h4>
            </div>

            <div class="container my-2">
                <div class="row">
                    <!-- 100% en Celular y 40% en Superiores -->
                    <div class="col-12 col-md-4 pe-2 my-2">
                        <div class="Bebidas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 text-center p-3">
                                        <h3>Agua del Dia</h3>
                                        <hr>
                                        <img src="./source//MENU/agua_del_dia.avif" alt="Agua del Dia" class="Bebidas-Menu rounded-3" width="200px" height="200px">
                                        <p class="Descripcion fs-5 my-2">Agua del Dia (500 ml)</p>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center my-2">
                                        <a role="button" id="btn-Bebidas-1" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Bebida-1">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 100% en Celular y 40% en Superiores -->
                    <div class="col-12 col-md-4 my-2">
                        <div class="Bebidas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 text-center p-3">
                                        <h3>Refrescos</h3>
                                        <hr>
                                        <img src="./source//MENU/refresco.jpeg" alt="Refrescos" class="Bebidas-Menu rounded-3" width="200px" height="200px">
                                        <p class="Descripcion fs-5 my-2">Refrescos de (355 ml)</p>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center my-2">
                                        <a role="button" id="btn-Bebidas-2" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Bebida-2">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 100% en Celular y 40% en Superiores -->
                    <div class="col-12 col-md-4 ps-2 my-2">
                        <div class="Bebidas">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Producto usando 100% del espacio -->
                                    <div class="col-12 text-center p-3">
                                        <h3>Jugos</h3>
                                        <hr>
                                        <img src="./source//MENU/boing.jpg" alt="Jugos" class="Bebidas-Menu rounded-3" width="200px" height="200px">
                                        <p class="Descripcion fs-5 my-2">Boing de (354 ml)</p>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center my-2">
                                        <a role="button" id="btn-Bebidas-3" class="btn btn-ver" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Bebida-3">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer: Regresar a Bienvenida e Info -->
    <footer class="mt-3 rounded-top-4">
        <div class="container-fluid text-center">
            <div class="row mx-2">
                <!-- 100% en Celular y 10% en Superiores -->
                <div class="col-12 col-md-2 my-1 mx-2">
                    <div class="footer-item">
                        <a role="button" href="Bienvenida.php" id="btn-footer-Inicio" class="btn btn-footer">Bienvenida</a>
                    </div>
                </div>
                <!-- 100% en Celular y 10% en Superiores -->
                <div class="col-12 col-md-2 my-1 mx-2">
                    <div class="footer-item">
                        <a role="button" id="btn-footer-Horario" class="btn btn-footer" data-bs-toggle="modal" data-bs-target="#Horario">Horarios</a>
                    </div>
                </div>
                <div class="col-12 col-md-2 my-1 mx-2">
                    <div class="footer-item p-2">
                        <span>Copyright ©</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal PRODUCTOS: Tacos -->
    <div class="modal fade" id="M-Tacos-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Tacos:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source/MENU/Tacos.jpg.png" alt="tacos-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Proteína de elección, cebolla caramelizada, nopales, papas fritas</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                                <!-- Formulario -->
                                <form id="Ingredientes">
                                    <!-- Proteinas --> 
                                    <span class="fw-bold fs-5">Proteinas (OBLIGATORIO)</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-1">
                                        <label for="Proteina-1" class="form-check-label">
                                            Longaniza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-2">
                                        <label for="Proteina-2" class="form-check-label">
                                            Bisteck
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-3">
                                        <label for="Proteina-3" class="form-check-label">
                                            Pechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-4">
                                        <label for="Proteina-4" class="form-check-label">
                                            Suadero
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-5">
                                        <label for="Proteina-5" class="form-check-label">
                                            Campechano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-6">
                                        <label for="Proteina-6" class="form-check-label">
                                            VEGETARIANO "Champiñones asados con epazote y chile verde"
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Ingredientes -->
                                    <span class="fw-bold fs-5">Ingredientes</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-1">
                                        <label for="Ingredientes-1" class="form-check-label">
                                            Cebolla Caramelizada
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Ingredientes-2" class="form-check-label">
                                            Nopales
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-3" class="form-check-label">
                                            Papas Fritas
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Extras -->
                                    <span class="fw-bold fs-5">Extras + $10mxn</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" value="10">
                                        <label for="Extras-1" class="form-check-label">
                                            Costra de Queso Oaxaca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" value="10">
                                        <label for="Extras-2" class="form-check-label">
                                            Extras Papas
                                        </label>
                                    </div>
                                    <hr>
                                    <span class="fw-bold fs-5">Comentarios</span>
                                    <div class="form-comment">
                                        <input type="text" class="form-comment-input" placeholder="Opcional">
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">  <!-- Footer-Modal -->
                    <div class="left-footer pb-2">
                        <label for="Precio-Tacos">TOTAL:</label>
                        <span class="fs-3 PRECIO" data-precio-base="22">22</span>MXN
                    </div>
                    <div class="right-footer">
                        <label for="CANTIDAD">CANTIDAD:</label>    
                        <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD" value="1">
                        <button type="submit" class="btn btn-primary btn-agregar">Agregar</button>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Torta-1 -->
    <div class="modal fade" id="M-Torta-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Torta Sencilla:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/tortas1.jpg.png" alt="tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Proteína de tu elección, mayonesa, frijoles, jitomate, cebolla caramelizada</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                                <!-- Formulario -->
                                <form id="Ingredientes">
                                    <!-- Proteinas --> 
                                    <span class="fw-bold fs-5">Proteinas (OBLIGATORIO)</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-1">
                                        <label for="Proteina-1" class="form-check-label">
                                            Longaniza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-2">
                                        <label for="Proteina-2" class="form-check-label">
                                            Bisteck
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-3">
                                        <label for="Proteina-3" class="form-check-label">
                                            Pechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-4">
                                        <label for="Proteina-4" class="form-check-label">
                                            Suadero
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-5">
                                        <label for="Proteina-5" class="form-check-label">
                                            Campechano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-6">
                                        <label for="Proteina-6" class="form-check-label">
                                            VEGETARIANO "Champiñones asados con epazote y chile verde"
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Ingredientes -->
                                    <span class="fw-bold fs-5">Ingredientes</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-1">
                                        <label for="Ingredientes-1" class="form-check-label">
                                            Mayonesa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Ingredientes-2" class="form-check-label">
                                            Frijoles
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-3" class="form-check-label">
                                            Jitomate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-4" class="form-check-label">
                                            Cebolla Caramelizada
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Extras -->
                                    <span class="fw-bold fs-5">Extras + $10mxn</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-1">
                                        <label for="Extras-1" class="form-check-label">
                                            Costra de Queso Oaxaca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Extras Papas
                                        </label>
                                    </div>
                                    <hr>
                                    <span class="fw-bold fs-5">Comentarios</span>
                                    <div class="form-comment">
                                        <input type="text" class="form-comment-input" placeholder="Opcional">
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">  <!-- Footer-Modal -->
                <div class="left-footer pb-2">
                        <label>TOTAL:</label>
                        <span class="fs-3 PRECIO" data-precio-base="25">25</span>MXN
                    </div>
                    <div class="right-footer">
                        <label for="CANTIDAD">CANTIDAD:</label>    
                        <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD" value="1">
                        <button type="submit" class="btn btn-primary btn-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Torta-2 -->
    <div class="modal fade" id="M-Torta-2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Gordita:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/tortas2.jpg.png" alt="tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Tortilla de masa gruesa rellena de chicharrón + proteína de tu elección, lechuga, queso y crema</p>
                                        <p>(SOLO LOS MARTES)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                                <!-- Formulario -->
                                <form id="Ingredientes">
                                    <!-- Proteinas --> 
                                    <span class="fw-bold fs-5">Proteinas (OBLIGATORIO)</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-1">
                                        <label for="Proteina-1" class="form-check-label">
                                            Longaniza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-2">
                                        <label for="Proteina-2" class="form-check-label">
                                            Bisteck
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-3">
                                        <label for="Proteina-3" class="form-check-label">
                                            Pechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-4">
                                        <label for="Proteina-4" class="form-check-label">
                                            Suadero
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-5">
                                        <label for="Proteina-5" class="form-check-label">
                                            Campechano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-6">
                                        <label for="Proteina-6" class="form-check-label">
                                            VEGETARIANO "Champiñones asados con epazote y chile verde"
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Ingredientes -->
                                    <span class="fw-bold fs-5">Ingredientes</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-1">
                                        <label for="Ingredientes-1" class="form-check-label">
                                            Chicharron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Ingredientes-2" class="form-check-label">
                                            Lechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-3" class="form-check-label">
                                            Queso
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-4" class="form-check-label">
                                            Crema
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Extras -->
                                    <span class="fw-bold fs-5">Extras + $10mxn</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-1">
                                        <label for="Extras-1" class="form-check-label">
                                            Costra de Queso Oaxaca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Extras Papas
                                        </label>
                                    </div>
                                    <hr>
                                    <span class="fw-bold fs-5">Comentarios</span>
                                    <div class="form-comment">
                                        <input type="text" class="form-comment-input" placeholder="Opcional">
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">  <!-- Footer-Modal -->
                <div class="left-footer pb-2">
                        <label>TOTAL:</label>
                        <span class="fs-3 PRECIO" data-precio-base="22">22</span>MXN
                    </div>
                    <div class="right-footer">
                        <label for="CANTIDAD">CANTIDAD:</label>    
                        <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD" value="1">
                        <button type="submit" class="btn btn-primary btn-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal PRODUCTOS: Torta-3 -->
        <div class="modal fade" id="M-Torta-3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Pambazo:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/Tortas3.jpg.png" alt="tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Pan asado con salsa de chiles secos, relleno de papa con longaniza + proteína de tu elección, lechuga, queso y crema</p>
                                        <p>(SOLO LOS MIERCOLES)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                                <!-- Formulario -->
                                <form id="Ingredientes">
                                    <!-- Proteinas --> 
                                    <span class="fw-bold fs-5">Proteinas (OBLIGATORIO)</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-1">
                                        <label for="Proteina-1" class="form-check-label">
                                            Longaniza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-2">
                                        <label for="Proteina-2" class="form-check-label">
                                            Bisteck
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-3">
                                        <label for="Proteina-3" class="form-check-label">
                                            Pechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-4">
                                        <label for="Proteina-4" class="form-check-label">
                                            Suadero
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-5">
                                        <label for="Proteina-5" class="form-check-label">
                                            Campechano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-6">
                                        <label for="Proteina-6" class="form-check-label">
                                            VEGETARIANO "Champiñones asados con epazote y chile verde"
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Ingredientes -->
                                    <span class="fw-bold fs-5">Ingredientes</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-1">
                                        <label for="Ingredientes-1" class="form-check-label">
                                            Salsa Chiles Secos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Ingredientes-2" class="form-check-label">
                                            Papa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-3" class="form-check-label">
                                            Longaniza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-4" class="form-check-label">
                                            Lechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-4" class="form-check-label">
                                            Queso
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-4" class="form-check-label">
                                            Crema
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Extras -->
                                    <span class="fw-bold fs-5">Extras + $10mxn</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-1">
                                        <label for="Extras-1" class="form-check-label">
                                            Costra de Queso Oaxaca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Extras Papas
                                        </label>
                                    </div>
                                    <hr>
                                    <span class="fw-bold fs-5">Comentarios</span>
                                    <div class="form-comment">
                                        <input type="text" class="form-comment-input" placeholder="Opcional">
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">  <!-- Footer-Modal -->
                <div class="left-footer pb-2">
                        <label>TOTAL:</label>
                        <span class="fs-3 PRECIO" data-precio-base="25">25</span>MXN
                    </div>
                    <div class="right-footer">
                        <label for="CANTIDAD">CANTIDAD:</label>    
                        <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD" value="1">
                        <button type="submit" class="btn btn-primary btn-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Torta-4 -->
    <div class="modal fade" id="M-Torta-4" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Huarache:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/Tortas4.jpg.png" alt="tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Tortilla alargada con frijoles, proteína de elección, nopales, queso y crema</p>
                                        <p>(SOLO LOS JUEVES)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                                <!-- Formulario -->
                                <form id="Ingredientes">
                                    <!-- Proteinas --> 
                                    <span class="fw-bold fs-5">Proteinas (OBLIGATORIO)</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-1">
                                        <label for="Proteina-1" class="form-check-label">
                                            Longaniza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-2">
                                        <label for="Proteina-2" class="form-check-label">
                                            Bisteck
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-3">
                                        <label for="Proteina-3" class="form-check-label">
                                            Pechuga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-4">
                                        <label for="Proteina-4" class="form-check-label">
                                            Suadero
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-5">
                                        <label for="Proteina-5" class="form-check-label">
                                            Campechano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input-proteina" id="Proteina-6">
                                        <label for="Proteina-6" class="form-check-label">
                                            VEGETARIANO "Champiñones asados con epazote y chile verde"
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Ingredientes -->
                                    <span class="fw-bold fs-5">Ingredientes</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-1">
                                        <label for="Ingredientes-1" class="form-check-label">
                                            Frijoles
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Ingredientes-2" class="form-check-label">
                                            Nopales
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-3" class="form-check-label">
                                            Queso
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Ingredientes-4" class="form-check-label">
                                            Crema
                                        </label>
                                    </div>
                                    <hr>
                                    <!-- Extras -->
                                    <span class="fw-bold fs-5">Extras + $10mxn</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-1">
                                        <label for="Extras-1" class="form-check-label">
                                            Costra de Queso Oaxaca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input INCREMENTO" id="Extras-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Extras Papas
                                        </label>
                                    </div>
                                    <hr>
                                    <span class="fw-bold fs-5">Comentarios</span>
                                    <div class="form-comment">
                                        <input type="text" class="form-comment-input" placeholder="Opcional">
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">  <!-- Footer-Modal -->
                <div class="left-footer pb-2">
                        <label>TOTAL:</label>
                        <span class="fs-3 PRECIO" data-precio-base="22">22</span>MXN
                    </div>
                    <div class="right-footer">
                        <label for="CANTIDAD">CANTIDAD:</label>    
                        <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD" value="1">
                        <button type="submit" class="btn btn-primary btn-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Extras-1 -->
    <div class="modal fade" id="M-Extras-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Papas a la Francesa:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/papas.jpeg" alt="papas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Acompañadas de cátsup, queso amarillo y salsa picante</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label fs-5 fw-bold">Selecciona un Tamaño:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Grande">Grande (Orden Completa) 40mxn</option>
                                        <option value="Chica">Chica (Media Orden) 25mxn</option>
                                    </select>
                                    <span class="fs-5 fw-bold">Ingredientes</span>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-1">
                                        <label for="Extras-2" class="form-check-label">
                                            Catsup
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Salsa Picante
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-3">
                                        <label for="Extras-2" class="form-check-label">
                                            Queso Amarillo
                                        </label>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                <label for="CANTIDAD">CANTIDAD:</label>    
                <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD">
                     <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Extras-2 -->
    <div class="modal fade" id="M-Extras-2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Gelatinas y Flanes:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/postres.webp" alt="gelatinas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Gelatinas y Flan (Vazo de 8 oz / 240 ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">Selecciona un Postre:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Mango">GELATINA-(Mango)</option>
                                        <option value="Fresa">GELATINA-(Fresa)</option>
                                        <option value="Limon">GELATINA-(Limon)</option>
                                        <option value="Uva">GELATINA-(Uva)</option>
                                        <option value="Piña">GELATINA-(Piña)</option>
                                        <option value="Mosaico">GELATINA MOSAICO-(Combinado)</option>
                                        <option value="Napolitano">FLAN-(Napolitano)</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                <label for="CANTIDAD">CANTIDAD:</label>    
                <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD">
                     <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Bebida-1 -->
    <div class="modal fade" id="M-Bebida-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Agua del Dia:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/agua_del_dia.avif" alt="Bebidas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Agua del Dia (500 ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">Selecciona un Agua:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agua-1">Jamaica</option>
                                        <option value="Agua-2">Horchata</option>
                                        <option value="Agua-3">Tamarindo</option>
                                        <option value="Agua-4">Simple</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                <label for="CANTIDAD">CANTIDAD:</label>    
                <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD">
                     <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Bebida-2 -->
    <div class="modal fade" id="M-Bebida-2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Refrescos:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/refresco.jpeg" alt="Bebidas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Refrescos (355 ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">Selecciona un Refresco:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Coca-Cola">Coca-Cola</option>
                                        <option value="Pepsi">Pepsi</option>
                                        <option value="Sprite">Sprite</option>
                                        <option value="Fanta">Fanta</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                <label for="CANTIDAD">CANTIDAD:</label>    
                <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD">
                     <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal PRODUCTOS: Bebida-3 -->
    <div class="modal fade" id="M-Bebida-3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Boing:</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/boing.jpg" alt="Bebidas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Boing (354 ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">Selecciona un Jugo:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Mango">Mango</option>
                                        <option value="Guayaba">Guayaba</option>
                                        <option value="Fresa">Fresa</option>
                                        <option value="Tamarindo">Tamarindo</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                <label for="CANTIDAD">CANTIDAD:</label>    
                <input type="number" class="cantidad" min="0" max="10" id="CANTIDAD">
                     <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal NEGOCIO -->
    <div class="modal fade" id="Horario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Informacion</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle ms-3" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg>
                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex justify-content-between">
                        <div class="top-left-area my-2">
                            <div class="container">
                                <span class="fw-bold">Chilango'Street:</span>
                                <div class="container">
                                    <span class="fs-5">"Cocina en movimiento por la ciudad de Xalapa como referente de los antojitos chilangos, creado con bajos costos para el mayor alcance de la población en cualquier lugar y cualquier momento"</span>
                                </div>
                            </div>
                        </div>
                        <div class="top-right-area">
                            <div class="top-logo-img-area pe-2">
                                <img src="./source/Chilango_Street_logo.jpg" alt="logo" width="70" height="70" class="modal-logo rounded-2">
                            </div>
                        </div>
                    </div>
                    <div class="social-media d-flex m-1">
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp mx-2" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                        </a>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram mx-2" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-share mx-2" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                            </svg>
                        </a>
                    </div>
                    <hr>
                    <div class="container my-1">
                        <span class="fw-bold">Direccion:</span>
                        <div class="direccion p-2 d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                            <p class="ms-2">91090 Xalapa, "Zona Centro y Alrededores", Mex. , Veracruz</p>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <span class="fw-bold">Servicios:</span>
                        <div class="servicios pt-2">
                            <ul class="list-unstyled">
                                <li class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-truck mx-2" viewBox="0 0 16 16">
                                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                                    </svg>
                                    <p>Punto de Venta - <span class="fw-bold">Dependiendo el Dia</span></p>
                                </li>
                                <li class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-down mx-2" viewBox="0 0 16 16">
                                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z" />
                                        <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.707l-.646.646V10.5a.5.5 0 0 0-1 0v2.793l-.646-.646a.5.5 0 0 0-.708.707l1.5 1.5a.5.5 0 0 0 .708 0" />
                                    </svg>
                                    <p>Domicilio - <span class="fw-bold">Moto: $15mxn para toda zona centro</span></p>
                                </li>
                                <li class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-radar mx-2 mt-1" viewBox="0 0 16 16">
                                        <path d="M6.634 1.135A7 7 0 0 1 15 8a.5.5 0 0 1-1 0 6 6 0 1 0-6.5 5.98v-1.005A5 5 0 1 1 13 8a.5.5 0 0 1-1 0 4 4 0 1 0-4.5 3.969v-1.011A2.999 2.999 0 1 1 11 8a.5.5 0 0 1-1 0 2 2 0 1 0-2.5 1.936v-1.07a1 1 0 1 1 1 0V15.5a.5.5 0 0 1-1 0v-.518a7 7 0 0 1-.866-13.847" />
                                    </svg>
                                    <span class="fw-bold"><span class="fs-4">+ </span>$15mxn a zonas fuera del radio!</span>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <span class="fw-bold my-2 d-flex justify-content-center fs-4">Punto de Venta:</span>
                        <div class="d-flex justify-content-between">
                            <div class="botton-left-area ms-2">
                                <ul class="left-list list-unstyled">
                                    <li class="fs-5">
                                        LUNES
                                    </li>
                                    <li class="fs-5 my-1">
                                        MARTES
                                    </li>
                                    <li class="fs-5 my-1">
                                        MIERCOLES
                                    </li>
                                    <li class="fs-5 my-1">
                                        JUEVES
                                    </li>
                                    <li class="fs-5 my-1">
                                        VIERNES
                                    </li>
                                    <li class="fs-5 my-1">
                                        SABADO
                                    </li>
                                    <li class="fs-5 my-1">
                                        DOMINGO
                                    </li>
                                </ul>
                            </div>
                            <div class="botton-right-area me-2">
                                <ul class="right-list list-unstyled">
                                    <li class="fs-5 ms-3">
                                        CERRADO
                                    </li>
                                    <li class="fs-5 my-1">
                                        Estadio Xalapeño
                                    </li>
                                    <li class="fs-5 my-1">
                                        Parque Juarez
                                    </li>
                                    <li class="fs-5 my-1">
                                        Mercado de San José
                                    </li>
                                    <li class="fs-5 my-1">
                                        Plaza Xanath
                                    </li>
                                    <li class="fs-5 my-1">
                                        Los Berros
                                    </li>
                                    <li class="fs-5 my-1">
                                        Los Lagos
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <span class="fw-bold my-2 d-flex justify-content-center fs-4">Horarios:</span>
                        <div class="d-flex justify-content-between">
                            <div class="botton-left-area ms-2">
                                <ul class="left-list list-unstyled">
                                    <li class="fs-5">
                                        LUNES
                                    </li>
                                    <li class="fs-5 my-1">
                                        MARTES
                                    </li>
                                    <li class="fs-5 my-1">
                                        MIERCOLES
                                    </li>
                                    <li class="fs-5 my-1">
                                        JUEVES
                                    </li>
                                    <li class="fs-5 my-1">
                                        VIERNES
                                    </li>
                                    <li class="fs-5 my-1">
                                        SABADO
                                    </li>
                                    <li class="fs-5 my-1">
                                        DOMINGO
                                    </li>
                                </ul>
                            </div>
                            <div class="botton-right-area me-2">
                                <ul class="right-list list-unstyled">
                                    <li class="fs-5 ms-3 fw-bold">
                                        CERRADO
                                    </li>
                                    <li class="fs-5 my-1 fw-bold">
                                        12:00 PM - 6:00 PM
                                    </li>
                                    <li class="fs-5 my-1 fw-bold">
                                        12:00 PM - 6:00 PM
                                    </li>
                                    <li class="fs-5 my-1 fw-bold">
                                        12:00 PM - 6:00 PM
                                    </li>
                                    <li class="fs-5 my-1 fw-bold">
                                        3:00 PM - 11:00 PM
                                    </li>
                                    <li class="fs-5 my-1 fw-bold">
                                        3:00 PM - 11:00 PM
                                    </li>
                                    <li class="fs-5 my-1 fw-bold">
                                        3:00 PM - 11:00 PM
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Sweet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="./JS/Verificar.js"></script>
    <script src="./JS/Precios.js"></script>

</body>

</html>