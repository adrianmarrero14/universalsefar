<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('id_cliente');
            $table->string('cliente');
            $table->string('etiqueta');
            $table->string('fecha_registro');
            $table->string('fecha_entrada');
            $table->string('may_inf');
            $table->string('may_est');
            $table->string('enlace');
            $table->string('carg_bd_doc');
            $table->string('familiares');
            $table->string('gen_sefar');
            $table->string('abogado');
            $table->string('n_pasaporte');
            $table->string('pais_pasaporte');
            $table->string('observaciones');
            $table->string('gen_ext');
            $table->string('fs_estudio');
            $table->string('fa_estudio');
            $table->string('est_caso_ge');
            $table->string('obs_ge');
            $table->string('est_gsc');
            $table->string('anho_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('pais_nacimiento');
            $table->string('sexo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('f_analisis');
            $table->string('e_analisis');
            $table->string('s_analisis');
            $table->string('nota_analisis');
            $table->string('s_ventas');
            $table->string('fc_ventas');
            $table->string('nota_ventas');
            $table->string('fer_informe');
            $table->string('fc_informe');
            $table->string('s_informe');
            $table->string('notas_informe');
            $table->string('f_pago_fase2');
            $table->string('tipo_certificado');
            $table->string('f_certificado');
            $table->string('s_certificado');
            $table->string('notas_certificado');
            $table->string('f_pago_fase3');
            $table->string('cons_doc');
            $table->string('envio_doc_notaria');
            $table->string('f_firma');
            $table->string('s_notaria');
            $table->string('notas_notaria');
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
        Schema::dropIfExists('clientes');
    }
}
