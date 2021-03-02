<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles Component -->
    <x-styles />

</head>
<body>

    <!-- Header Component -->
    <x-header />

    <div class="container-fluid bg-form">
        <div class="container">
            <div class="row mt-4 mb-3">
                <div class="col-md-8">
                    <a href="{{ URL::to('documentos/crear') }}" class="btn btn-sefar-blue">Agregar Documento</a>
                </div>
                <div class="col-md-4">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Buscar Documento" aria-label="Search">
                        <button class="btn btn-sefar-blue" type="submit">
                            <img src="{{ asset('images/svg/lupa.svg') }}" width="20px" alt="Buscar">
                        </button>
                    </form>
                    <div id="resultados"></div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Documento</th>
                        <th scope="col">F. Inc.</th>
                        <th scope="col">Formato</th>
                        <th scope="col">Tipo de Doc.</th>
                        <th scope="col">De</th>
                        <th scope="col">A</th>
                        <th scope="col">País</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Drive</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentos as $documento)
                        <tr>
                            <th scope="row">{{ $documento->id }}</th>
                            <td>{{ $documento->documento }}</td>
                            <td>{{ $documento->fecha_incorporacion }}</td>
                            <td>{{ $documento->formato }}</td>
                            <td>{{ $documento->tipo }}</td>
                            <td>{{ $documento->anho_ini }}</td>
                            <td>{{ $documento->anho_fin }}</td>
                            <td>{{ $documento->pais }}</td>
                            <td>{{ $documento->ciudad }}</td>
                            <td class="text-center">
                                <a href="{{ $documento->enlace }}">
                                    <img src="{{ asset('images/drive.png') }}" alt="Drive" width="30px">
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ URL::to('documentos/editar/'.$documento->id) }}">
                                    <img src="{{ asset('images/editar.png') }}" alt="Editar" width="30px">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            {{ $documentos->links() }}
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />

    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <!-- Buscador Script -->
    <script>
        let texto = document.getElementById('search')
        
    </script>
</body>
</html>