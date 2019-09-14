<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('IDarticulo');
            $table->integer('cantidad');
            $table->unsignedInteger('IDmaterial');
            $table->foreign('IDarticulo')->references('id')->on('Articulo');
            $table->foreign('IDmaterial')->references('id')->on('Material');

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
        Schema::dropIfExists('inventarios');
    }
}
