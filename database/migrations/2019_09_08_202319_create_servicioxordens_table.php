<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioxordensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicioxordens', function (Blueprint $table) {
            
            $table->unsignedInteger('idServicio');
            $table->unsignedInteger('idDetalle');
            $table->foreign('idServicio')->references('id')->on('Servicio');
            $table->foreign('idDetalle')->references('id')->on('detalle');  

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
        Schema::dropIfExists('servicioxordens');
    }
}
