<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdIntegracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_integraciones', function (Blueprint $table) {
            $table->id();
            $table->string('id2');
            $table->string('id_jotform');
            $table->string('id_teamleader');
            $table->string('id_monday');
            $table->string('pasaporte');
            $table->string('carga');
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
        Schema::dropIfExists('id_integraciones');
    }
}
