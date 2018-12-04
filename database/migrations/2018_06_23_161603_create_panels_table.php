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
            $table->string('title');
            $table->string('location_image');
            $table->string('imagen');
            $table->string('desciption1');
            $table->string('desciption2');
            $table->string('text_btn_link');
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
