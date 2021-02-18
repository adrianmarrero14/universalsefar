<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Header CSS -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <!-- Styles CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Login CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- Footer CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>
<body>
    <div id="app">
        <!--
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{ { url('/') }}">
                    { { config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!- - Left Side Of Navbar - ->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!- - Right Side Of Navbar - ->
                    <ul class="navbar-nav ml-auto">
                        <!- - Authentication Links - ->
                        @ guest
                            <li class="nav-item">
                                <a class="nav-link" href="{ { route('login') }}">{ { __('Login') }}</a>
                            </li>
                            @ if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{ { route('register') }}">{ { __('Register') }}</a>
                                </li>
                            @ endif
                        @ else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    { { Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{ { route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        { { __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{ { route('logout') }}" method="POST" class="d-none">
                                        @ csrf
                                    </form>
                                </div>
                            </li>
                        @ endguest
                    </ul>
                </div>
            </div>
        </nav>
        -->

        
    

        <!-- Header Login -->
        <header class="text-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-principal">
                <div class="container container-fluid">
                    <a class="navbar-brand color-white col-sm" href="#">Control de Documentos</a>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container container-fluid">
                    <a class="navbar-brand col-sm" href="#"><img src="{{ asset('images/logo-sefar.png') }}" alt="SEFAR"></a>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
