<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('descripcion');
            $table->bigInteger('domicilio_id')->unsigned();
            $table->bigInteger('documentos_id')->unsigned();
            $table->integer('edad');
            $table->longText('long_descripcion');
            $table->integer('m2construccion');
            $table->integer('m2terreno');
            $table->integer('no_banos');
            $table->integer('no_cuartos');
            $table->integer('no_niveles');
            $table->string('nombre_propietario');
            $table->integer('tipo_propiedad');
            $table->integer('status');
            $table->double('precio');
            $table->timestamps();


            $table->foreign('domicilio_id')->references('id')->on('domicilios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('documentos_id')->references('id')->on('documentos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedads');
    }
}
