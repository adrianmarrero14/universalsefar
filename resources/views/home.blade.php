<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Header CSS -->
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">

        <!-- Styles CSS -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- Footer CSS -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    </head>
    <body>
        <!--
        <div class="flex-center position-ref full-height">
            @ if (Route::has('login'))
                <div class="top-right links">
                    @ auth
                        <a href="{ { url('/') }}">Home</a>
                    @ else
                        <a href="{ { route('login') }}">Login</a>

                        @ if (Route::has('register'))
                            <a href="{ { route('register') }}">Register</a>
                        @ endif
                    @ endauth
                </div>
            @ endif
        -->

        <header class="">
            <!-- Header Title and User -->
            <nav class="navbar navbar-expand-lg navbar-light bg-principal">
                <div class="container container-fluid">
                <a class="navbar-brand color-white col-sm" href="#">Control de Documentos</a>
                <button class="navbar-toggler navbar-togler-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-sm" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Adrian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Mi Cuenta</a></li>
                        <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>

            <!-- Header Navbar and Links -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container container-fluid">
                <a class="navbar-brand col-sm" href="#"><img src="{{ asset('images/logo-sefar.png') }}" alt="SEFAR"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-sm" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Archivos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Documentos</a></li>
                        <li><a class="dropdown-item" href="#">Biblioteca</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Árbol Genealógico</a></li>
                        <li><a class="dropdown-item" href="#">Busqueda por Familiares</a></li>
                        <li><a class="dropdown-item" href="#">Últimas Actualizaciones</a></li>
                        <li><a class="dropdown-item" href="#">-----------------------------</a></li>
                        <li><a class="dropdown-item" href="#">Casos Asignados en Curso</a></li>
                        <li><a class="dropdown-item" href="#">Casos Asignados Finalizados</a></li>
                        <li><a class="dropdown-item" href="#">-----------------------------</a></li>
                        <li><a class="dropdown-item" href="#">Seguimiento</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Directorios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Personal de la Empresa</a></li>
                        <li><a class="dropdown-item" href="#">Genealogistas Internos</a></li>
                        <li><a class="dropdown-item" href="#">Clientes</a></li>
                        <li><a class="dropdown-item" href="#">-----------------------------</a></li>
                        <li><a class="dropdown-item" href="#">General</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Utilidades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Glosario de Términos</a></li>
                        <li><a class="dropdown-item" href="#">-----------------------------</a></li>
                        <li><a class="dropdown-item" href="#">Enlaces</a></li>
                        <li><a class="dropdown-item" href="#">Descargas</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

        <!-- Background Image -->
        <div class="bg-body">

            <!-- Carousel -->
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="412px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>BIENVENIDO(A) A LA NUEVA PLATAFORMA DE SEFAR UNIVERSAL</h1>
                                <p>Mucho más rápida y más eficiente.</p>
                                <a href="https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable" class="btn btn-sefar">Ir a <strong>Wikipedia</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="412px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>DOCUMENTOS</h1>
                                <p>La intención de este buscador es indexar toda la información contenida en la unidad de almacenamiento de Google Drive nombrada actualmente “0002 ARCHIVOS CRISANTO”. Su uso es intuitivo y práctico.</p>
                                <a href="http://localhost/sefaruniversalclean/src/pages/documentos.php" class="btn btn-sefar">Ir a <strong>Documentos</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="412px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>CLIENTES - ÁRBOL GENEALÓGICO</h1>
                                <p>En esta página se pueden realizar búsquedas de documentos aportados por los clientes, a partir de datos como su nombre, apellidos y número de pasaporte. Su uso es intuitivo y práctico.</p>
                                <a href="https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable" class="btn btn-sefar">Ir a <strong>Árbol Genealógico</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="412px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>CLIENTES - BÚSQUEDA POR FAMILIARES</h1>
                                <p>Esta página es muy similar a Clientes – Árbol Genealógico, pero no solo permite buscar a los clientes sino también a sus familiares, es muy práctica para investigar parentescos entre clientes.</p>
                                <a href="https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable" class="btn btn-sefar">Ir a <strong>Búsqueda por Familiares</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="412px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>CLIENTES - CASOS ASIGNADOS EN CURSO</h1>
                                <p>Con la finalidad de realizar un seguimiento eficiente a las solicitudes de mayor estudio genealógico para los clientes que lo requieran, se tiene dispuesto un módulo para su respectivo control.</p>
                                <a href="https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable" class="btn btn-sefar">Ir a <strong>Casos Asignados en Curso</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="412px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>CLIENTES - CASOS ASIGNADOS FINALIZADOS</h1>
                                <p>Esta página es muy similar a Clientes – Casos asignado en curso , pero con la diferencia que solo muestra los casos de estudio genealógicos finalizados con sus respectivos resultados.</p>
                                <a href="https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable" class="btn btn-sefar">Ir a <strong>Casos Asignados Finalizados</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>

        <!-- News -->
        <div class="container-fluid pt-4 pb-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Últimas Actualizaciones</h2>
                        <p>
                            A simple vista no parece haber muchos cambios. Pero las mejoras internas permitirán que esta plataforma evolucione mucho más rápido y eficiente para el beneficio de todos en Sefar y sus clientes.
                        </p>
                    </div>
                    <div class="col-md-6 text-end">
                        <img src="./public/images/listo.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-fluid footer">
                <p class="text-center p-3 color-white">Copyright - 2021 Todos los derechos son reservados por <a href="https://www.sefaruniversal.com/">SEFAR UNIVERSAL SL.</a></p>
            </div>
        </footer>

        <!-- Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>
