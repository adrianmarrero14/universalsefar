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
            <h3 class="text-center mt-2">{ }</h3>
            <h6 class="text-center">N° Identificación: { }</h6>
            <form action="" method="post">
                <div class="row mt-2 mb-2 pt-2">
                    
                    <div class="col-md-4">
                        <h4 class="text-center">Información Cliente</h4>
                        <div class="form-group">
                            <label for="">Nombre completo del cliente:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Nombre completo del cliente"
                            id="" name="" value="{  }">
                        </div>

                        <div class="form-group row">
                            
                            <div class="col">
                                <label for="">Sexo:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato">
                                    <option value="--">--</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="">Año Nac.:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="Año de Nacimiento"
                                id="" name="" value="">
                            </div>
                            
                            <div class="col">
                                <label for="">Lugar Nac.:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="Lugar de Nacimiento"
                                id="" name="" value="">
                            </div>
                            
                            
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="">País de Nacimiento:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato">
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

                            <div class="col">
                                <label for="">N° de Pasaporte:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="N° de Pasaporte"
                                id="" name="" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">País de Pasaporte:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione País">
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
                            <label for="">¿Tiene familiares realizando el proceso?:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione respuesta">
                                    <option value="--">--</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                        </div>
                        -----
                        <div class="form-group">
                            <label for=""><strong>Estado general de la solicitud:</strong></label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione estado">
                                    <option value="Aceptado Sefardí">Aceptado Sefardí</option>
                                    <option value="Analisis por Semana">Analisis por Semana</option>
                                    <option value="Carta de Naturaleza">Carta de Naturaleza</option>
                                    <option value="En Estudio">En Estudio</option>
                                    <option value="Falta de Información">Falta de Información</option>
                                    <option value="Nacionalidad Italiana">Nacionalidad Italiana</option>
                                    <option value="No aceptado Sefardí">No aceptado Sefardí</option>
                                    <option value="No Especificado">No Especificado</option>
                                    <option value="Profundizar Estudio">Carta de Naturaleza</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">Información Interna</h4>
                        
                        <div class="form-group">
                            <label for="">Etiqueta:</label>
                            <select class="form-select border-sefar col mb-2" name="" id="">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="form-group row">                  
                            <div class="col">
                                <label for="">Genealogista Sefar:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato">
                                    <option value="PDF">DOC</option>
                                    <option value="PDF">DOCX</option>
                                    <option value="PDF">FP7</option>
                                    <option value="PDF">FTMB</option>
                                    <option value="PDF">JPG</option>
                                    <option value="PDF">LNK</option>
                                    <option value="PDF">MDB</option>
                                    <option value="PDF">PDF</option>
                                    <option value="PDF">XLSX</option>
                                    <option value="TXT">ZIP</option>
                                    <option value="BLOC">Varios</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="">Abogado del caso:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="" value="">
                            </div>
                        </div>

                        <div class="form-group">                      
                            <label for="">¿Requiere solicitud de estudio de un genealogista?:</label>
                            <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>    
                        </div>
                        <div class="form-group">
                            <label for="">¿El cliente entregó o se le solicitó mayor información?:</label>
                            <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">¿El cliente entregó o se le solicitó mayor información?:</label>
                            <textarea class="form-control border-sefar col mb-2" aria-label="Seleccione formato">
                            </textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">Seguimiento Temporal</h4>
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="">Fecha registro cliente:</label>
                                <input type="date" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="" value="">
                            </div>
                            
                            <div class="col-6">
                                <label for="">Fecha solicitud estudio:</label>
                                <input type="date" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="">Fecha asignación a genealogista externo:</label>
                                <input type="date" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="" value="">
                            </div>
                        </div>
                        <div class="text-center mt-1 mb-1">-----</div>
                        <h4 class="text-center">Genealogista Externo</h4>
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <select class
                            ="form-select border-sefar mb-2">
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
                            <label for="">Estado del Caso:</label>
                            <select class
                            ="form-select border-sefar mb-2">
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
                            <label for="">Observaciones:</label>
                            <textarea type="text" class="form-control border-sefar mb-2" placeholder="Observaciones"
                            id="" name=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('casos-finalizados') }}" class="btn btn-sefar">
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

    <!-- Footer Component -->
    <x-footer />
</body>
</html>