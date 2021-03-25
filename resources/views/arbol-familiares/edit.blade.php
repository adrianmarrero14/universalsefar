<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Árbol Familiares | Editar</title>

    <!-- Styles Component -->
    <x-styles />

</head>
<body>
        
    <!-- Pubic Header -->
    <x-public-header />

    <div class="container-fluid bg-form">
        <div class="container mb-4 ">
            <h3 class="text-center mt-2">{{ $familiar->nombres }} {{ $familiar->apellidos }}</h3>
            <form action="{{ url('arbol-familiares/update/'.$familiar->id_general) }}" method="post">
                <div class="row mt-2 mb-2 pt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombres:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Nombres"
                            id="" name="nombres" value="{{ old('familiar', $familiar->nombres) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Apellidos:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Apellidos"
                            id="" name="apellidos" value="{{ old('familiar', $familiar->apellidos) }}">
                        </div>

                        <div class="form-group">
                            <label for="">N° Pasaporte:</label>
                            <input type="date" class="form-control border-sefar mb-2" id="" name="n_pasaporte" 
                            placeholder="N° Pasaporte"  value="{{ old('familiar', $familiar->n_pasaporte) }}">
                        </div>
                        <div class="form-group">
                            <label for="">País de Pasaporte:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Pasaporte"
                            id="" name="pais_pasaporte"  value="{{ old('familiar', $familiar->pais_pasaporte) }}">
                        </div>          
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Enlace Drive:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Enlace Drive"
                            id="" name="enlace"  value="{{ old('familiar', $familiar->enlace) }}">
                        </div>

                        <div class="form-group">
                            <label for="">N° Doc. Ident.:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="N° Doc. Ident."
                            id="" name="ndoc_indent"  value="{{ old('familiar', $familiar->ndoc_indent) }}">
                        </div>

                        <div class="form-group">
                            <label for="">País Doc. Ident.:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="País Doc. Ident."
                            id="" name="paisdoc_indent"  value="{{ old('familiar', $familiar->paisdoc_indent) }}">
                        </div>
                        <div class="form-group">
                            <label for="">Sexo:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Sexo"
                            id="" name="sexo"  value="{{ old('familiar', $familiar->sexo) }}">
                        </div>
                    </div>
                </div>
                <div class="row mb-2 pt-2">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Nacimiento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Nacimiento"
                            id="" name="pais_nacimiento"  value="{{ old('familiar', $familiar->pais_nacimiento) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Nacimiento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Nacimiento"
                            id="" name="lugar_nacimiento"  value="{{ old('familiar', $familiar->lugar_nacimiento) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Nacimiento:</label>
                            <input type="date" class="form-control border-sefar mb-2" id="" name="anho_nacimiento" 
                            placeholder="Año de Nacimiento"  value="{{ old('familiar', $familiar->anho_nacimiento) }}">
                        </div>         
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Bautizo:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Bautizo"
                            id="" name="pais_bautizo"  value="{{ old('familiar', $familiar->pais_bautizo) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Bautizo:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Bautizo"
                            id="" name="lugar_bautizo"  value="{{ old('familiar', $familiar->lugar_bautizo) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Bautizo:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Bautizo"
                            id="" name="anho_bautizo"  value="{{ old('familiar', $familiar->anho_bautizo) }}">
                        </div>
                    </div>  
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Matrimonio:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Matrimonio"
                            id="" name="pais_matrimonio"  value="{{ old('familiar', $familiar->pais_matrimonio) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Matrimonio:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Matrimonio"
                            id="" name="lugar_matrimonio"  value="{{ old('familiar', $familiar->lugar_matrimonio) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Matrimonio:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Matrimonio"
                            id="" name="anho_matrimonio"  value="{{ old('familiar', $familiar->anho_matrimonio) }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Defunción:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Defunción"
                            id="" name="pais_defuncion"  value="{{ old('familiar', $familiar->pais_defuncion) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Defunción:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Defunción"
                            id="" name="lugar_defuncion"  value="{{ old('familiar', $familiar->lugar_defuncion) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Defunción:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Defunción"
                            id="" name="anho_defuncion"  value="{{ old('familiar', $familiar->anho_defuncion) }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('arbol-familiares') }}" class="btn btn-sefar">
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