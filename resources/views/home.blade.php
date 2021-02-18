<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles Component -->
        <x-styles />

    </head>
    <body>

        <!-- Header Component -->
        <x-header/>

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

        <!-- Footer Component -->
        <x-footer />

        <!-- Scripts Component -->
        <x-scripts />
    </body>
</html>
