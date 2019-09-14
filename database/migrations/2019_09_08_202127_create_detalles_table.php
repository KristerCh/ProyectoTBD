<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('idArticulo');
            $table->integer('cantidad');
            $table->unsignedInteger('idOrden');
            $table->integer('total'); 
            $table->foreign('idArticulo')->references('id')->on('Articulo');
            $table->foreign('idOrden')->references('id')->on('OC'); 

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
        Schema::dropIfExists('detalles');
    }
}
