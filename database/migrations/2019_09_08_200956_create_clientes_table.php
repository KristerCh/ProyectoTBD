<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');

            $table->string('identidad');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email');
            $table->string('calle');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('descuento');
            
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
