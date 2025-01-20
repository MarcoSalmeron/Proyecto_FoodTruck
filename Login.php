<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/Login.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
</head>

<body class="main-body">
    <!-- Header -->
    <header class="Main-Header container rounded-bottom-4 mb-3">

    <div class="image-top-section mb-1">
        <img src="./source/Header-2.png" alt="img-top-header" class="img-main-header rounded-bottom-2">
    </div>
    <div class="logo-bottom-section">
        <!-- Logo y Titulo -->
        <div class="left-area-logo">
            <div class="logo-img-area">
                <img src="./source/Chilango_Street_logo.jpg" class="logo-bottom-img rounded-3" alt="Logo">
            </div>
            <div class="logo-text-area mt-3 ms-1 p-3">
                <h2 class="Titulo">Solamente Personal!</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FFC107" class="bi bi-exclamation-triangle-fill ms-1" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    <hr>
            </div>
        </div>
    </div>
    <hr>
    </header>

    <!-- Main: Login -->
    <main>
        <!-- Contenedor tipo carta-->
        <div class="container py-3">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card">
                        <h3 class="card-header border-bottom-0">ADMINISTRADOR</h3>
                        <div class="card-body">
                            <!-- Formulario para Login -->
                            <form action="process.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label" for="id" hidden>ID de Admin (invisible)</label>
                                    <input class="form-control" type="hidden" id="id" name="id" value="3214581482375">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="usuario">Usuario</label>
                                    <input class="form-control" type="text" id="usuario" name="usuario">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="contra">Contraseña</label>
                                    <input class="form-control" type="password" id="contra" name="contra">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-success" type="submit">Aceptar</button>
                                    <button class="btn btn-danger" type="reset">Reiniciar</button>
                                </div>
                            </form>
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
                    <div class="footer-item p-2">
                        <span>Copyright ©</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>