<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Árbol Clientes | Editar</title>

    <!-- Styles Component -->
    <x-styles />

</head>
<body>
        
    <!-- Pubic Header -->
    <x-public-header />

    <div class="container-fluid bg-form">
        <div class="container mb-4 ">
            <h3 class="text-center mt-2">{{ $cliente->cliente }}</h3>
            <h6 class="text-center">{{ $cliente->pais_nacimiento }} / {{ $cliente->lugar_nacimiento }}</h6>
            <form action="{{ url('arbol-clientes/update/'.$cliente->id_cliente) }}" method="post">
                <div class="row mt-2 mb-2 pt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nombres:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Nombres"
                            id="" name="nombres" value="{{ old('cliente', $cliente->nombres) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Apellidos:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Apellidos"
                            id="" name="apellidos" value="{{ old('cliente', $cliente->apellidos) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Fecha de Registro:</label>
                            <input type="date" class="form-control border-sefar mb-2" id="" name="fecha_registro" value="{{ old('cliente', $cliente->fecha_registro) }}">
                        </div>          
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">País de Nacimiento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Nacimiento"
                            id="" name="pais_nacimiento" value="{{ old('cliente', $cliente->pais_nacimiento) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Ciudad de Nacimiento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Nacimiento"
                            id="" name="lugar_nacimiento" value="{{ old('cliente', $cliente->lugar_nacimiento) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Nacimiento:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Nacimiento"
                            id="" name="anho_nacimiento" value="{{ old('cliente', $cliente->anho_nacimiento) }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col">
                            <label for="">Enlace a Drive:</label>
                            <input type="text" class="form-control border-sefar col mb-2" placeholder="Enlace a Drive"
                                id="" name="enlace" value="{{ old('cliente', $cliente->enlace) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Familiares:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Familiares"
                            id="" name="familiares" value="{{ old('cliente', $cliente->familiares) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Sexo:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Sexo"
                            id="" name="sexo" value="{{ old('cliente', $cliente->sexo) }}">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <label for=""><strong>Cargado en Family Tree Maker:</strong></label>
                        <select name="" id="">
                            <option value="no">No</option>
                            <option value="si">Si</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('arbol-clientes') }}" class="btn btn-sefar">
                            Regresar
                        </a>
                    </div>
                    <div class="col text-end">
                        @csrf
                        <button class="btn btn-sefar" type="submit">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>

    <!-- Footer Component -->
    <x-footer />
</body>
</html>