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
                            <input class="form-control me-2" type="search" placeholder="Buscar Familiar" aria-label="Search">
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
                            <th scope="col">Persona</th>
                            <th scope="col">País de Nac.</th>
                            <th scope="col">Lugar de Nac.</th>
                            <th scope="col">Año de Nac.</th>
                            <th scope="col">ID del Cliente</th>
                            <th scope="col">Parentesco</th>
                            <th scope="col">Árbol</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($familiares as $familiar)
                        <tr>
                            <th scope="row">{{ $familiar->id }}</th>
                            <td>{{ $familiar->nombre_familiar }}</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>
                                <a href="{{ URL::to('arbol-familiares/editar/'.$familiar->id) }}">
                                Editar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $familiares->links() }}
            </div>
        </div>

        <!-- Footer Component -->
        <x-footer />

        <!-- Scripts Component -->
        <x-scripts />
    </body>
</html>