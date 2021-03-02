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

        <div class="container-fluid bg-form">
            <div class="container">
                <div class="row mt-4 mb-3">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" name="search" placeholder="Buscar Cliente" aria-label="Search">
                            <button class="btn btn-sefar-blue" type="submit">
                                <img src="{{ asset('images/svg/lupa.svg') }}" width="20px" alt="Buscar">
                            </button>
                        </form>
                    </div>
                </div>
    
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">N° Pas.</th>
                            <th scope="col">F. Registro</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">País de Nac.</th>
                            <th scope="col">Lugar de Nac.</th>
                            <th scope="col">Año de Nac.</th>
                            <th scope="col">FTM</th>
                            <th scope="col">Árbol</th>
                            <th scope="col">Documentos</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->sexo }}</th>
                                <td>{{ $cliente->n_pasaporte }}</td>
                                <td>{{ $cliente->fecha_registro }}</td>
                                <td>{{ $cliente->nombres }} {{ $cliente->apellidos}}</td>
                                <td>{{ $cliente->pais_nacimiento }}</td>
                                <td>{{ $cliente->lugar_nacimiento }}</td>
                                <td>{{ $cliente->anho_nacimiento }}</td>
                                <td class="text-center">
                                    <a href="">
                                        <img src="{{ asset('images/FTM_G.png') }}" alt="FTM" width="30px">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="">
                                        <img src="{{ asset('images/arbol.png') }}" alt="Árbol Genealógico" width="30px">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ $cliente->enlace }}">
                                        <img src="{{ asset('images/drive.png') }}" alt="Drive" width="30px">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ URL::to('arbol-clientes/editar/'.$cliente->id_cliente) }}">
                                        <img src="{{ asset('images/editar.png') }}" alt="Editar" width="30px">
                                    </a>
                                </td>
                            </tr> 
                        @endforeach  
                    </tbody>
                </table>
                
                {{ $clientes->links() }}
            </div>
        </div>
    
        <!-- Footer Component -->
        <x-footer />

        <!-- Scripts Component -->
        <x-scripts />
    </body>
</html>