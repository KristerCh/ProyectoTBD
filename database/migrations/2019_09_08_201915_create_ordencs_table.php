<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdencsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordencs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->dateTime('fecha');
            $table->unsignedInteger('idEmpleado');
            $table->unsignedInteger('idCliente');
            $table->foreign('idEmpleado')->references('id')->on('Empleados'); 
            $table->foreign('idCliente')->references('id')->on('Cliente');

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
        Schema::dropIfExists('ordencs');
    }
}
