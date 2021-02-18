<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgClienteInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_cliente_inicials', function (Blueprint $table) {
            $table->id('id_general');
            $table->string('id_cliente');
            $table->string('id_persona');
            $table->string('id_padre');
            $table->string('id_madre');
            $table->string('generacion');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('n_pasaporte');
            $table->string('pais_pasaporte');
            $table->string('ndoc_indent');
            $table->string('paisdoc_indent');
            $table->string('sexo');
            $table->string('anho_nacimiento');
            $table->string('mes_nacimiento');
            $table->string('dia_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('pais_nacimiento');
            $table->string('anho_bautizo');
            $table->string('mes_bautizo');
            $table->string('dia_bautizo');
            $table->string('lugar_bautizo');
            $table->string('pais_bautizo');
            $table->string('anho_matrimonio');
            $table->string('mes_matrimonio');
            $table->string('dia_matrimonio');
            $table->string('lugar_matrimonio');
            $table->string('pais_matrimonio');
            $table->string('anho_defuncion');
            $table->string('mes_defuncion');
            $table->string('dia_defuncion');
            $table->string('lugar_defuncion');
            $table->string('pais_defuncion');
            $table->string('vive');
            $table->string('observaciones');
            $table->string('familiaridad');
            $table->string('nombres_f');
            $table->string('apellidos_f');
            $table->string('parentesco_f');
            $table->string('n_pasaporte_f');
            $table->string('f_registro');
            $table->string('pais_nacimiento2');
            $table->string('lugar_nacimiento2');
            $table->string('familiar');
            $table->string('enlace');
            $table->string('ftm');
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
        Schema::dropIfExists('ag_cliente_inicials');
    }
}
