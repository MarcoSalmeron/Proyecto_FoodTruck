<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/Admin.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
</head>
<body class="main-page">
    
    <!-- Header Pagina -->
    <header class="main-header container">

        <div class="image-top-section">
            <!-- Boton (Modal)-->
            <button type="button" class="btn-top-header me-3 p-1" id="btn-top-Horario" data-bs-toggle="modal" data-bs-target="#M-Mod-Negocio">
                <!-- Logo de Reloj -->
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                </svg>
                <!--Modificar span Respecto al Horario-->
                <span class="Actividad mx-2" name="Horario"></span>

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
                    <button class="btn-info px-4" data-bs-toggle="modal" data-bs-target="#M-Mod-Negocio">
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
                <a class="p-3 nav-item rounded-bottom-4">CREAR PROD.</a>
            </li>
            <li>
                <a class="p-3 nav-item rounded-bottom-4">ELIMINAR PROD.</a>
            </li>
        </ul>
        <hr>
    </div>

    <!-- Main: Productos/Inventario -->
    <main>

        <!-- Categoria: Tacos  Formato de Filas de 2 columnas-->
        <div id="Menu-Tacos" class="container my-2">
            <!-- Titulo de Categoria -->
            <div class="Categoria p-4 rounded-5">
                <h4>TACOS:<span name="Precio" class="Precio fw-bold fs-2" id="Precio-Tacos"> 22 </span>MXN</h4>
            </div>

            <div class="container my-2">
                <div class="row">
                    <!-- 100% en Celular y 50% en Superiores -->
                    <div class="col-12 my-2">
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
                                        <a role="button" id="btn-Tacos-1" class="btn-mod" data-bs-toggle="modal" data-bs-target="#M-Mod-Tacos-1">MODIFICAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categoria: Tortas Formato de Filas de 2 Columnas -->
        <div id="Menu-Tortas" class="container my-2">
            <!-- Titulo de Categoria -->
            <div class="Categoria p-4 rounded-5">
                <h4>TORTAS:<span name="Precio" class="Precio fw-bold fs-2" id="Precio-Tortas"> 25</span> MXN</h4>
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
                                        <a role="button" href="#0" id="btn-Tortas-1" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Tortas-1">MODIFICAR</a>
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
                                            <h3>Gorditas</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Tortilla de masa gruesa rellena de chicharrón + proteína de tu elección, lechuga, queso y crema</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center p-3">
                                        <a role="button" href="#0" id="btn-Tortas-2" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Tortas-2">MODIFICAR</a>
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
                                            <h3>Pambazo</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Pan asado con salsa de chiles secos, relleno de papa con longaniza + proteína de tu elección, lechuga, queso y crema</p>
                                        </div>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <a role="button" href="#0" id="btn-Tortas-3" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Tortas-3">MODIFICAR</a>
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
                                        <img src="./source//MENU/Tortas4.jpg.png" alt="Torta4" class="Tortas-Menu rounded-5" width="150px" height="170px">
                                        <div class="Descripcion px-3">
                                            <h3>Huarache</h3>
                                            <hr>
                                            <p class="Descripcion fs-5">Tortilla alargada con frijoles, proteína de tu elección, nopales, queso y crema</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center p-3 mt-4">
                                        <a role="button" href="#0" id="btn-Tortas-4" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Tortas-4">MODIFICAR</a>
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
                                        <h6 class="fst-italic"><span name="Precio" class="Precio fw-bold fs-4" id="Precio-Papas">40 </span> MXN</h6>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <a role="button" href="#0" id="btn-Extras-1" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Extras-1">MODIFICAR</a>
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
                                        <h6 class="fst-italic"><span name="Precio" class="Precio fw-bold fs-5" id="Precio-Postres">25</span> MXN</h6>
                                    </div>
                                    <!-- Boton (Modal)-->
                                    <div class="col-12 text-center p-3">
                                        <a role="button" href="#0" id="btn-Extras-2" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Extras-2">MODIFICAR</a>
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
                <h4>BEBIDAS:<span name="Precio" class="Precio fw-bold fs-2" id="Precio-Bebidas"> 25</span> MXN</h4>
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
                                        <a role="button" href="#0" id="btn-Bebidas-1" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Bebidas-1">MODIFICAR</a>
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
                                        <a role="button" href="#0" id="btn-Bebidas-2" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Bebidas-2">MODIFICAR</a>
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
                                        <a role="button" href="#0" id="btn-Bebidas-3" class="btn-mod" style="max-height : 40px;" data-bs-toggle="modal" data-bs-target="#M-Mod-Bebidas-3">MODIFICAR</a>
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
    <footer class="mt-2 rounded-top-4">
        <div class="container-fluid text-center">
            <div class="row mx-2">
                <!-- 100% en Celular y 10% en Superiores -->
                <div class="col-12 col-md-2 my-1 mx-3">
                    <div class="footer-item p-2">
                        <a role="button" href="Bienvenida.php" id="btn-footer-Inicio" class="btn-footer">Bienvenida</a>
                    </div>
                </div>
                <!-- 100% en Celular y 10% en Superiores -->
                 <div class="col-12 col-md-2 my-1 mx-3 ms-auto">
                        <div class="footer-item p-2">
                            <span>Copyright ©</span>
                        </div>
                 </div>
            </div>
        </div>
    </footer>

    <!-- Modal MODIFICAR PRODUCTO: Tacos -->
    <div class="modal fade" id="M-Mod-Tacos-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Tacos</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/Tacos.jpg.png" alt="Tacos-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Proteína de tu elección, cebolla caramelizada, nopales, papas fritas</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agregar">Agregar Cantidad</option>
                                        <option value="Eliminar">Eliminar Cantidad</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Tortas-1 -->
    <div class="modal fade" id="M-Mod-Tortas-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Torta Sencilla</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/tortas1.jpg.png" alt="Tortas-img" width="100" height="100" class="rounded-3">
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
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agregar">Agregar Cantidad</option>
                                        <option value="Eliminar">Eliminar Cantidad</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Tortas-2 -->
    <div class="modal fade" id="M-Mod-Tortas-2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Gorditas</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/tortas2.jpg.png" alt="Tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Tortilla de masa gruesa rellena de chicharrón + proteína de tu elección, lechuga, queso y crema</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agregar">Agregar Cantidad</option>
                                        <option value="Eliminar">Eliminar Cantidad</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Tortas-3 -->
    <div class="modal fade" id="M-Mod-Tortas-3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Pambazo</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/Tortas3.jpg.png" alt="Tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Pan asado con salsa de chiles secos, relleno de papa con longaniza + proteína de tu elección, lechuga, queso y crema</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agregar">Agregar Cantidad</option>
                                        <option value="Eliminar">Eliminar Cantidad</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Tortas-4 -->
    <div class="modal fade" id="M-Mod-Tortas-4" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Huarache</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/Tortas4.jpg.png" alt="Tortas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Tortilla alargada con frijoles, proteína de tu elección, nopales, queso y crema</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agregar">Agregar Cantidad</option>
                                        <option value="Eliminar">Eliminar Cantidad</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Extras-1 -->
    <div class="modal fade" id="M-Mod-Extras-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Papas a la Francesa</h1>
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
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agregar">Agregar Cantidad</option>
                                        <option value="Eliminar">Eliminar Cantidad</option>
                                    </select>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Extras-2 -->
    <div class="modal fade" id="M-Mod-Extras-2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Postres</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/postres.webp" alt="papas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Gelatinas de Sabores y Flan</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Mango">GELATINA-(Mango)</option>
                                        <option value="Fresa">GELATINA-(Fresa)</option>
                                        <option value="Limon">GELATINA-(Limon)</option>
                                        <option value="Uva">GELATINA-(Uva)</option>
                                        <option value="Piña">GELATINA-(Piña)</option>
                                        <option value="Mosaico">GELATINA MOSAICO-(Combinado)</option>
                                        <option value="Napolitano">FLAN-(Napolitano)</option>
                                    </select>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Modificar">
                                        <label for="Modificar" class="form-check-label">
                                            Agregar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Eliminar
                                        </label>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Bebidas-1 -->
    <div class="modal fade" id="M-Mod-Bebidas-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Agua del Dia</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/agua_del_dia.avif" alt="bebidas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Agua del Dia (500ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Agua-1">Jamaica</option>
                                        <option value="Agua-2">Horchata</option>
                                        <option value="Agua-3">Tamarindo</option>
                                        <option value="Agua-4">Simple</option>
                                    </select>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Modificar">
                                        <label for="Modificar" class="form-check-label">
                                            Agregar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Eliminar
                                        </label>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Bebidas-2 -->
    <div class="modal fade" id="M-Mod-Bebidas-2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Refrescos</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/refresco.jpeg" alt="bebidas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Refrescos (355ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Coca-Cola">Coca-Cola</option>
                                        <option value="Pepsi">Pepsi</option>
                                        <option value="Sprite">Sprite</option>
                                        <option value="Fanta">Fanta</option>
                                    </select>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Modificar">
                                        <label for="Modificar" class="form-check-label">
                                            Agregar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Eliminar
                                        </label>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR PRODUCTO: Bebidas-3 -->
    <div class="modal fade" id="M-Mod-Bebidas-3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->

                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>MODIFICAR: Jugos</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container d-flex justify-content-evenly">
                                    <div class="img-prod p-2">
                                        <img src="./source//MENU/boing.jpg" alt="bebidas-img" width="100" height="100" class="rounded-3">
                                    </div>
                                    <div class="img-text-area p-2">
                                        <p>Boing (354ml)</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-12 my-1">
                            <!-- Formulario  -->
                                <form>
                                    <label for="opciones" class="form-label">MODIFICAR PRODUCTO:</label>
                                    <select class="form-select" id="opciones" name="opciones">
                                        <option value="Mango">Mango</option>
                                        <option value="Guayaba">Guayaba</option>
                                        <option value="Fresa">Fresa</option>
                                        <option value="Tamarindo">Tamarindo</option>
                                    </select>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Modificar">
                                        <label for="Modificar" class="form-check-label">
                                            Agregar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="Ingredientes-2">
                                        <label for="Extras-2" class="form-check-label">
                                            Eliminar
                                        </label>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <input type="number" placeholder="CANTIDAD" class="cantidad">
                     <button type="submit" class="btn btn-primary btn-agregar" id="Agregar-Cambios">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal MODIFICAR NEGOCIO: Abrir o Cerrar Negocio -->
    <div class="modal fade" id="M-Mod-Negocio" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> <!--Header-Modal -->
                    <div class="logo">
                        <img src="./source/Chilango_Street_logo.jpg" alt="Chilango-Logo" width="40" height="40" class="rounded-3 me-2">
                    </div>
                    <h1>Negocio: Abrir / Cerrar</h1>
                </div>

                <div class="modal-body">    <!-- Body-Modal -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 my-2 mx-auto">
                                <div class="container">
                                    <div class="img-text-area p-2">
                                        <p>Deseas Cerrar o Abrir el Negocio?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">  <!-- Footer-Modal -->
                    <button type="submit" class="btn btn-warning" id="Cerrar">Cerrar</button>
                     <button type="submit" class="btn btn-primary" id="Abrir">Abrir</button>
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
    <script src="./JS/Negocio.js"></script>
    <script src="./JS/Cantidad.js"></script>
</body>

</html>