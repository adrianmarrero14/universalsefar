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

        <div class="container-fluid">
            <div class="container">
                <div class="row mt-4 mb-3">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Buscar Cliente" aria-label="Search">
                            <button class="btn btn-sefar-blue" type="submit">
                                <img src="{{ asset('images/svg/lupa.svg') }}" width="20px" alt="Buscar">
                            </button>
                        </form>
                    </div>
                </div>
    
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sexo</th>
                            <th scope="col">País</th>
                            <th scope="col">ID Cliente</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Etiqueta</th>
                            <th scope="col">F. Solicitud</th>
                            <th scope="col">Genealogista Ext.</th>
                            <th scope="col">F. Asignación</th>
                            <th scope="col">Lugar de Nac.</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Árbol</th>
                            <th scope="col">Drive</th>
                            <th scope="col">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($casos as $caso)    
                            <tr>
                                <td>{{ $caso->sexo }}</td>
                                <td>{{ $caso->pais_nacimiento }}</td>
                                <td>{{ $caso->id_cliente }}</td>
                                <td>{{ $caso->cliente }}</td>
                                <td>{{ $caso->etiqueta }}</td>
                                <td>{{ $caso->fs_estudio }}</td>
                                <td>{{ $caso->gen_ext }}</td>
                                <td>{{ $caso->fa_estudio }}</td>
                                <td>{{ $caso->lugar_nacimiento }}</td>
                                <td>{{ $caso->est_caso_ge }}</td>
                                <td class="text-center">
                                    <a href="">
                                        <img src="{{ asset('images/arbol.png') }}" alt="Árbol Genealógico" width="30px">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ $caso->enlace }}">
                                        <img src="{{ asset('images/drive.png') }}" alt="Drive" width="30px">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ URL::to('casos-asignados/editar/'.$caso->id) }}">
                                        <img src="{{ asset('images/editar.png') }}" alt="Editar" width="30px">
                                    </a>
                                </td>
                            </tr> 
                        @endforeach
                          
                    </tbody>
                </table>
    
            </div>
        </div>
    
        <!-- Footer Component -->
        <x-footer />

        <!-- Scripts Component -->
        <x-scripts />
    </body>
</html>