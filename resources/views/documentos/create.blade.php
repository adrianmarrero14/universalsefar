<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentos | Crear</title>

    <!-- Styles Component -->
    <x-styles />

</head>
<body>
        
    <!-- Pubic Header -->
    <x-public-header /> 

    <div class="container-fluid bg-form">
        <div class="container mb-4">
            <h3 class="text-center mt-2">Agregar Documento</h3>
            <form action="{{ url('documentos/store/') }}" method="post">
                <div class="row mt-2 mb-2 pt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Título del Documento:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Título del Documento"
                            id="" name="documento" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Mención de Responsabilidad:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Mención de Responsabilidad"
                            id="" name="responsabilidad" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Título de la Revista:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Título de la Revista"
                            id="" name="titulo_revista" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Colección:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Colección"
                            id="" name="coleccion" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Fuente Personal o Institucional:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Fuente Personal o Institucional"
                            id="" name="fuente" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Suministrado por:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Suministrado por"
                            id="" name="origen" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Notas:</label>
                            <textarea type="text" class="form-control border-sefar mb-2" placeholder="Notas"
                            id="" name="notas"></textarea>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Ubicación en Google Drive:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Ubicación en Google Drive"
                            id="" name="ubicacion" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Ubicación anterior en Google Drive:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Ubicación anterior en Google Drive"
                            id="" name="ubicacion_ant" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Editorial / Ciudad:</label>
                            <input type="text" class
                            ="form-control border-sefar mb-2" placeholder="Editorial / Ciudad"
                            id="" name="editorial" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Colación:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Colación"
                            id="" name="colacion" value="">
                        </div>

                        <div class="form-group">
                            <label for="">ISBN / ISSN:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="ISBN / ISSN"
                            id="" name="isbn" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Fecha de Catalogación:</label>
                            <input type="date" class="form-control border-sefar mb-2" placeholder="Fecha de Catalogación"
                            id="" name="fecha_incorporacion" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Enlace:</label>
                            <textarea type="text" class="form-control border-sefar mb-2" placeholder="Enlace"
                            id="" name="enlace"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col">
                                <label for="">De (Año):</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="anho_ini" value="">
                            </div>
                            
                            <div class="col">
                                <label for="">A (Año):</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="A (Año)"
                                id="" name="anho_fin" value="">
                            </div>
                            
                            <div class="col">
                                <label for="">Formato:</label>
                                <select class="form-select border-sefar col mb-2" name="formato" aria-label="Seleccione formato">
                                    <option value="DOC">DOC</option>
                                    <option value="DOCX">DOCX</option>
                                    <option value="FP7">FP7</option>
                                    <option value="FTMB">FTMB</option>
                                    <option value="JPG">JPG</option>
                                    <option value="LNK">LNK</option>
                                    <option value="MDB">MDB</option>
                                    <option value="PDF">PDF</option>
                                    <option value="XLSX">XLSX</option>
                                    <option value="ZIP">ZIP</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5">
                                <label for="">Publicación:</label>
                                <input type="text" class="form-control border-sefar mb-2" placeholder="Publicación"
                                id="" name="anho_publicacion" value="">
                            </div>
                            <div class="col-md-7">
                                <label for="">N° y Volumen:</label>
                                <input type="text" class="form-control border-sefar mb-2" placeholder="N° y Volumen"
                                id="" name="no_vol" value="">
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="">Tipo de Documentos:</label>
                            <select class
                            ="form-select border-sefar mb-2" name="tipo">
                                <option value="Amancebamientos">Amancebamientos</option>
                                <option value="Artículos">Artículos</option>
                                <option value="Base de Datos">Base de Datos</option>
                                <option value="Causas">Causas</option>
                                <option value="Denuncias">Denuncias</option>
                                <option value="Documentos">Documentos</option>
                                <option value="Documento de Bautismo">Documento de Bautismo</option>
                                <option value="Documento de Defuncion">Documento de Defuncion</option>
                                <option value="Documento de Matrimonio">Documento de Matrimonio</option>
                                <option value="Documento de Nacimiento">Documento de Nacimiento</option>
                                <option value="Documento de Cliente">Documento de Cliente</option>
                                <option value="Excomuniones">Excomuniones</option>
                                <option value="Genealogia">Genealogia</option>
                                <option value="Libros">Libros</option>
                                <option value="Normativas">Normativas</option>
                                <option value="Querellas">Querellas</option>
                                <option value="Reclasificar">Reclasificar</option>
                                <option value="Testamento">Testamento</option>
                                <option value="Visitas Pastorales">Visitas Pastorales</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">País:</label>
                            <select class
                            ="form-select border-sefar mb-2" name="pais">
                                <option value="Alemania">Alemania</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Australia">Australia</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Canada">Canada</option>
                                <option value="Chile">Chile</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curazao">Curazao</option>
                                <option value="EE UU">EE UU</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Emiratos Arabes">Emiratos Arabes</option>
                                <option value="España">España</option>
                                <option value="Francia">Francia</option>
                                <option value="Inglaterra">Inglaterra</option>
                                <option value="Libano">Libano</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Panama">Panama</option>
                                <option value="Peru">Peru</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Republica Dominicana">Republica Dominicana</option>
                                <option value="Suecia">Suecia</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Venezuela">Venezuela</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Edición:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Edición"
                            id="" name="edicion" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Ciudad:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Ciudad"
                            id="" name="ciudad" value="">
                        </div>

                        <div class="form-group">
                            <label for="">Palabras claves para búsqueda:</label>
                            <textarea type="text" class="form-control border-sefar mb-2" placeholder="Palabras claves para búsqueda"
                            id="" name="busqueda"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('documentos') }}" class="btn btn-sefar">
                            Regresar
                        </a>
                    </div>
                    <div class="col text-end">
                        @csrf
                        <input class="btn btn-sefar" type="submit" value="Guardar">                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />
</body>
</html>