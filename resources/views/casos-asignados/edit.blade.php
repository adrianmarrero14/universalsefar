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
            <h3 class="text-center mt-2">{{ $caso_editar->cliente }}</h3>
            <h6 class="text-center">N° Identificación: {{ $caso_editar->id }}</h6>
            <form action="{{ url('casos-asignados/update/'.$caso_editar->id) }}" method="post">
                <div class="row mt-2 mb-2 pt-2">
                    
                    <div class="col-md-4">
                        <h4 class="text-center">Información Cliente</h4>
                        <div class="form-group">
                            <label for="">Nombre completo del cliente:</label>
                            <input type="text" class="form-control border-sefar mb-2" placeholder="Nombre completo del cliente"
                            id="" name="cliente" value="{{ old('caso_editar', $caso_editar->cliente) }}">
                        </div>

                        <div class="form-group row">
                            
                            <div class="col">
                                <label for="">Sexo:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato" name="sexo">
                                    <option value="{{ old('caso_editar', $caso_editar->sexo) }}">{{ old('caso_editar', $caso_editar->sexo) }}</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="">Año Nac.:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="Año de Nacimiento"
                                id="" name="anho_nacimiento" value="{{ old('caso_editar', $caso_editar->anho_nacimiento) }}">
                            </div>
                            
                            <div class="col">
                                <label for="">Lugar Nac.:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="Lugar de Nacimiento"
                                id="" name="lugar_nacimiento" value="{{ old('caso_editar', $caso_editar->lugar_nacimiento) }}">
                            </div>
                            
                            
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="">País de Nacimiento:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato" name="pais_nacimiento">
                                    <option value="{{ old('caso_editar', $caso_editar->pais_nacimiento) }}">{{ old('caso_editar', $caso_editar->pais_nacimiento) }}</option>
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
                                id="" name="n_pasaporte" value="{{ old('caso_editar', $caso_editar->n_pasaporte) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">País de Pasaporte:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione País" name="pais_pasaporte">
                                    <option value="{{ old('caso_editar', $caso_editar->pais_pasaporte) }}">{{ old('caso_editar', $caso_editar->pais_pasaporte) }}</option>
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
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione respuesta" name="familiares">
                                    <option value="{{ old('caso_editar', $caso_editar->familiares) }}">{{ old('caso_editar', $caso_editar->familiares) }}</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                        </div>
                        -----
                        <div class="form-group">
                            <label for=""><strong>Estado general de la solicitud:</strong></label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione estado" name="est_gsc">
                                    <option value="{{ old('caso_editar', $caso_editar->est_gsc) }}">{{ old('caso_editar', $caso_editar->est_gsc) }}</option>
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
                            <select class="form-select border-sefar col mb-2" name="etiqueta" id="">
                                <option value="{{ old('caso_editar', $caso_editar->etiqueta) }}">{{ old('caso_editar', $caso_editar->etiqueta) }}</option>
                                <option value="Carta de Naturaleza">Carta de Naturaleza</option>
                                <option value="Cobrar Analisis por Semana">Cobrar Analisis por Semana</option>
                                <option value="Cobrar Analisis por Semana / Familia Guarenas">Cobrar Analisis por Semana / Familia Guarenas</option>
                                <option value="Familia Guarenas">Familia Guarenas</option>
                                <option value="Genealogia Argentina">Genealogia Argentina</option>
                                <option value="Genealogia Argentina-Colombiana">Genealogia Argentina-Colombiana</option>
                                <option value="Genealogia Argentina-Siria">Genealogia Argentina-Siria</option>
                                <option value="Genealogia Barranquilla">Genealogia Barranquilla</option>
                                <option value="Genealogia Canarias">Genealogia Canarias</option>
                                <option value="Genealogia Chilena">Genealogia Chilena</option>
                                <option value="Genealogia Colombiana">Genealogia Colombiana</option>
                                <option value="Genealogia Colombiana-Peruna">Genealogia Colombiana-Peruna</option>
                                <option value="Genealogia Cubana">Genealogia Cubana</option>
                                <option value="Genealogia Doble">Genealogia Doble</option>
                                <option value="Genealogia Dominicana">Genealogia Dominicana</option>
                                <option value="Genealogia Ecuatoriana">Genealogia Ecuatoriana</option>
                                <option value="Genealogia Israeli-Rumana">Genealogia Israeli-Rumana</option>
                                <option value="Genealogia Jamaiquina">Genealogia Jamaiquina</option>
                                <option value="Genealogia Libanez">Genealogia Libanez</option>
                                <option value="Genealogia Marroqui">Genealogia Marroqui</option>
                                <option value="Genealogia Medellin">Genealogia Medellin</option>
                                <option value="Genealogia Mexicana">Genealogia Mexicana</option>
                                <option value="Genealogia Oriente">Genealogia Oriente</option>
                                <option value="Genealogia Peruana">Genealogia Peruana</option>
                                <option value="Genealogia Polaca">Genealogia Polaca</option>
                                <option value="Puertorriqueña">Puertorriqueña</option>
                                <option value="Genealogia Siria">Genealogia Siria</option>
                                <option value="Genealogia Texas">Genealogia Texas</option>
                                <option value="Genealogia Venezolana">Genealogia Venezolana</option>
                                <option value="Para Nacionalidad Alemana">Para Nacionalidad Alemana</option>
                                <option value="Para Nacionalidad Italiana">Para Nacionalidad Italiana</option>
                                <option value="Pasar a Du Bois">Pasar a Du Bois</option>
                                <option value="Pasar a Du Bois / Carta de Naturaleza">Pasar a Du Bois / Carta de Naturaleza </option>
                                <option value="Pasar a Du Bois / Genealogia Argentina-Colombiana">Pasar a Du Bois / Genealogia Argentina-Colombiana</option>
                                <option value="Pasar a Du Bois / Genealogia Argentina-Venezolana">Pasar a Du Bois / Genealogia Argentina-Venezolana</option>
                                <option value="Pasar a Du Bois / Genealogia Colombiana">Pasar a Du Bois / Genealogia Colombiana</option>
                                <option value="Pasar a Du Bois / Genealogia Doble">Pasar a Du Bois / Genealogia Doble</option>
                                <option value="Pasar a Du Bois / Genealogia Estadounidense-Venezolana">Pasar a Du Bois / Genealogia Estadounidense-Venezolana</option>
                                <option value="Pasar a Garcia Jaspe">Pasar a Garcia Jaspe</option>
                                <option value="Pasar a General de la Concha">Pasar a General de la Concha</option>
                                <option value="Pasar a Morales Manzur">Pasar a Morales Manzur</option>
                                <option value="Pasar a Morales Manzur / Doble">Pasar a Morales Manzur / Doble</option>
                                <option value="Pasar a Morales Manzur / Genealogia Doble">Pasar a Morales Manzur / Genealogia Doble</option>
                                <option value="Pasar a Moreno Oliver / Genealogia Peruana-Venezolana">Pasar a Moreno Oliver / Genealogia Peruana-Venezolana</option>
                                <option value="Sefardita Curazao">Sefardita Curazao</option>
                                <option value="Sefardita Libanez">Sefardita Libanez</option>
                                <option value="Sin Etiqueta">Sin Etiqueta</option>
                            </select>
                        </div>
                        <div class="form-group row">                  
                            <div class="col">
                                <label for="">Genealogista Sefar:</label>
                                <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato" name="gen_sefar">
                                    <option value="{{ old('caso_editar', $caso_editar->gen_sefar) }}">{{ old('caso_editar', $caso_editar->gen_sefar) }}</option>
                                    <option value="Crisanto Bello">Crisanto Bello</option>
                                    <option value="Liliana Du Bois">Liliana Du Bois</option>
                                    <option value="Rosa Hidalgo">Rosa Hidalgo</option>
                                    <option value="Pablo Mestre">Pablo Mestre</option>
                                    <option value="Jose Luis Romero">Jose Luis Romero</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="">Abogado del caso:</label>
                                <input type="text" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="abogado" value="{{ old('caso_editar', $caso_editar->abogado) }}">
                            </div>
                        </div>

                        <div class="form-group">                      
                            <label for="">¿Requiere solicitud de estudio de un genealogista?:</label>
                            <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato" name="may_est">
                                <option value="{{ old('caso_editar', $caso_editar->may_est) }}">{{ old('caso_editar', $caso_editar->may_est) }}</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>    
                        </div>
                        <div class="form-group">
                            <label for="">¿El cliente entregó o se le solicitó mayor información?:</label>
                            <select class="form-select border-sefar col mb-2" aria-label="Seleccione formato" name="may_inf">
                                <option value="{{ old('caso_editar', $caso_editar->may_inf) }}">{{ old('caso_editar', $caso_editar->may_inf) }}</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Observaciones:</label>
                            <textarea class="form-control border-sefar col mb-2" aria-label="Seleccione formato" name="observaciones">
                                {{ old('caso_editar', $caso_editar->observaciones) }}
                            </textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">Seguimiento Temporal</h4>
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="">Fecha registro cliente:</label>
                                <input type="date" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="fecha_registro" value="{{ old('caso_editar', $caso_editar->fecha_registro) }}">
                            </div>
                            
                            <div class="col-6">
                                <label for="">Fecha solicitud estudio:</label>
                                <input type="date" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="fs_estudio" value="{{ old('caso_editar', $caso_editar->fs_estudio) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="">Fecha asignación a genealogista externo:</label>
                                <input type="date" class="form-control border-sefar col mb-2" placeholder="De (Año)"
                                id="" name="fa_estudio" value="{{ old('caso_editar', $caso_editar->fa_estudio) }}">
                            </div>
                        </div>
                        <div class="text-center mt-1 mb-1">-----</div>
                        <h4 class="text-center">Genealogista Externo</h4>
                        <div class="form-group">
                            <label for="">Nombre:</label>
                                <select id="" name="gen_ext" class="form-select border-sefar mb-2" name="gen_ext">
                                    <option value="{{ old('caso_editar', $caso_editar->gen_ext) }}">{{ old('caso_editar', $caso_editar->gen_ext) }}</option>
                                    <option value="Badaraco">Badaraco</option>  
                                    <option value="Enrique De la Conha">Enrique De la Conha</option>  
                                    <option value="Liliana Du Bois">Liliana Du Bois</option>  
                                    <option value="Germán Fleitas Nuñez">Germán Fleitas Nuñez</option>  
                                    <option value="Germán Fleitas Freites">Germán Fleitas Freites</option>  
                                    <option value="Caterin García">Caterin García</option>  
                                    <option value="René García Jaspe">René García Jaspe</option>  
                                    <option value="Ibarra Cárdenas">Ibarra Cárdenas</option>  
                                    <option value="Levy Benchimol">Levy Benchimol</option>  
                                    <option value="Gonzalo Luengo">Gonzalo Luengo</option>  
                                    <option value="Juan Morales Manzur">Juan Morales Manzur</option>  
                                    <option value="Marbelis Oropeza" selected="">Marbelis Oropeza</option>  
                                    <option value="Claritza Santos Mijares">Claritza Santos Mijares</option>  
                                    <option value="Leticia Rodríguez Robles">Leticia Rodríguez Robles</option>      
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="">Estado del Caso:</label>
                                <select id="" name="est_caso_ge" class="form-select border-sefar mb-2">          
                                    <option value="{{ old('caso_editar', $caso_editar->est_caso_ge) }}">{{ old('caso_editar', $caso_editar->est_caso_ge) }}</option>  
                                    <option value="Anulado">Anulado</option>  
                                    <option value="En pausa">En pausa</option>  
                                    <option value="En proceso" selected="">En proceso</option>  
                                    <option value="Entregó informe">Entregó informe</option>  
                                    <option value="Finalizado">Finalizado</option>  
                                    <option value="No asignado">No asignado</option>  
                                    <option value="Revisar">Revisar</option>  
                                    <option value="Sin iniciar">Sin iniciar</option>      
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="">Observaciones:</label>
                            <textarea type="text" class="form-control border-sefar mb-2" placeholder="Observaciones"
                            id="" name="obs_ge">{{ old('caso_editar', $caso_editar->obs_ge) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('casos-asignados') }}" class="btn btn-sefar">
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

    <!-- Footer Component -->
    <x-footer />
</body>
</html>