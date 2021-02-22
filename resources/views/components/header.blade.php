<header class="">
    <!-- Header Title and User -->
    <nav class="navbar navbar-expand-lg navbar-light bg-principal">
        <div class="container container-fluid">
        <a class="navbar-brand color-white" href="{{ route('home') }}">Control de Documentos</a>
        <button class="navbar-toggler navbar-togler-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Mi Cuenta</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();"
                        >
                            {{ __('Cerrar Sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Header Navbar and Links -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container container-fluid">
            <a class="navbar-brand col-sm" href="{{ route('home') }}"><img src="{{ asset('images/logo-sefar.png') }}" alt="SEFAR"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-sm" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Archivos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('documentos') }}">Documentos</a></li>
                    <li><a class="dropdown-item" href="{{ route('biblioteca') }}">Biblioteca</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('arbol-clientes.index') }}">Árbol Genealógico</a></li>
                    <li><a class="dropdown-item" href="{{ route('arbol-familiares') }}">Busqueda por Familiares</a></li>
                    <li><a class="dropdown-item" href="{{ route('arbol-actualizaciones') }}">Últimas Actualizaciones</a></li>
                    <li><a class="dropdown-item" href="#">-----------------------------</a></li>
                    <li><a class="dropdown-item" href="{{ route('casos-asignados') }}">Casos Asignados en Curso</a></li>
                    <li><a class="dropdown-item" href="{{ route('casos-finalizados') }}">Casos Asignados Finalizados</a></li>
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