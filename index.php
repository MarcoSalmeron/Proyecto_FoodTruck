<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <!-- Inicio de Pagina -->
    <div class="header container-fluid container-sm">
        <div class="titulo">
            <img src="./source/Chilango_Street_logo.jpg" alt="ChilangoStreet-logo" class="logo">
            <h3 class="titulo">ChilangoStreet</h3>
        </div>
        <!-- Actividad de la Pagina (Abierto-Cerrado) -->
         <div class="horario">
         <button type="button" class="btn btn-light">
            <!-- Logo de Reloj -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
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
    </div>

    <!-- Filtrar Productos por Categoria al Principio de Pagina -->
    <div class="container-fluid container-sm">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">Tacos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tortas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Extras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bebidas</a>
            </li>
        </ul>
    </div>
</body>

</html>