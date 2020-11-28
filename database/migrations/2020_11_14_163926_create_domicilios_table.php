<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('calle');
            $table->string('colonia');
            $table->bigInteger('municipio_id')->unsigned();
            $table->bigInteger('localidad_id')->unsigned();
            $table->string('zip_codigopostal');
            $table->timestamps();

            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('localidad_id')->references('id')->on('localidads')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilios');
    }
}
