<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create('panels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('anio');
            $table->string('subtitulo');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('link');
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
        Schema::dropIfExists('panels');
    }
}
