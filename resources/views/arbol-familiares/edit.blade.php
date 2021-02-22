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
        
    <!-- Pubic Header -->
    <x-public-header />

    <div class="container-fluid bg-form">
        <div class="container mb-4 ">
            <h3 class="text-center mt-2">{{ $familiar->nombre_familiar }}</h3>
            <form action="" method="post">
                <div class="row mt-2 mb-2 pt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombres:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Nombres"
                            id="" name="" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Apellidos:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Apellidos"
                            id="" name="">
                        </div>

                        <div class="form-group">
                            <label for="">N° Pasaporte:</label>
                            <input type="date" class="form-control border-sefar mb-2" id="" name="" placeholder="N° Pasaporte">
                        </div>
                        <div class="form-group">
                            <label for="">País de Pasaporte:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Pasaporte"
                            id="" name="" value="">
                        </div>          
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Enlace Drive:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Enlace Drive"
                            id="" name="" value="">
                        </div>

                        <div class="form-group">
                            <label for="">N° Doc. Ident.:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="N° Doc. Ident."
                            id="" name="">
                        </div>

                        <div class="form-group">
                            <label for="">País Doc. Ident.:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="País Doc. Ident."
                            id="" name="">
                        </div>
                        <div class="form-group">
                            <label for="">Sexo:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Sexo"
                            id="" name="">
                        </div>
                    </div>
                </div>
                <div class="row mb-2 pt-2">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Nacimiento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Nacimiento"
                            id="" name="" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Nacimiento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Nacimiento"
                            id="" name="">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Nacimiento:</label>
                            <input type="date" class="form-control border-sefar mb-2" id="" name="" placeholder="Año de Nacimiento">
                        </div>         
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Bautizo:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Bautizo"
                            id="" name="" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Bautizo:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Bautizo"
                            id="" name="">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Bautizo:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Bautizo"
                            id="" name="">
                        </div>
                    </div>  
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Matrimonio:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Matrimonio"
                            id="" name="" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Matrimonio:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Matrimonio"
                            id="" name="">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Matrimonio:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Matrimonio"
                            id="" name="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">País de Defunción:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="País de Defunción"
                            id="" name="" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Lugar de Defunción:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Lugar de Defunción"
                            id="" name="">
                        </div>

                        <div class="form-group">
                            <label for="">Año de Defunción:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Año de Defunción"
                            id="" name="">
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