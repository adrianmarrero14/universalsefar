<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bds', function (Blueprint $table) {
            $table->id();
            $table->string('documento');
            $table->string('formato');
            $table->string('tipo');
            $table->string('fuente');
            $table->string('origen');
            $table->string('ubicacion');
            $table->string('ubicacion_ant');
            $table->string('busqueda');
            $table->string('notas');
            $table->string('enlace');
            $table->string('anho_ini');
            $table->string('anho_fin');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('fecha_incorporacion');
            $table->string('responsabilidad');
            $table->string('edicion');
            $table->string('editorial');
            $table->string('anho_publicacion');
            $table->string('no_vol');
            $table->string('coleccion');
            $table->string('colacion');
            $table->string('isbn');
            $table->string('titulo_revista');
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
        Schema::dropIfExists('bds');
    }
}
