<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('laboratory_id')->unsigned();
            $table->foreign('laboratory_id')->references('id')->on('laboratories')->onDelete('cascade');
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
        Schema::dropIfExists('labimages');
    }
}
