<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenealogiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genealogias', function (Blueprint $table) {
            $table->id();
            $table->string('genealogias_id');
            $table->string('id_cliente');
            $table->string('id2');
            $table->string('id_padre');
            $table->string('id_madre');
            $table->string('generacion');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('anho_nacimiento');
            $table->string('mes_nacimiento');
            $table->string('dia_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('pais_nacimiento');
            $table->string('datos_exactos_nacimiento');
            $table->string('anho_bautizo');
            $table->string('mes_bautizo');
            $table->string('dia_bautizo');
            $table->string('lugar_bautizo');
            $table->string('pais_bautizo');
            $table->string('datos_bautizo');
            $table->string('anho_matrimonio');
            $table->string('mes_matrimonio');
            $table->string('dia_matrimonio');
            $table->string('lugar_matrimonio');
            $table->string('pais_matrimonio');
            $table->string('datos_matrimonio');
            $table->string('vive');
            $table->string('anho_defuncion');
            $table->string('mes_defuncion');
            $table->string('dia_defuncion');
            $table->string('lugar_defuncion');
            $table->string('pais_defuncion');
            $table->string('datos_defuncion');
            $table->string('sexo');
            $table->string('observaciones');
            $table->string('familiaridad');
            $table->string('enlace');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genealogias');
    }
}
