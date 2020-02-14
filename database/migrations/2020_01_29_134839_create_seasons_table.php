<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('serial_id');

            $table->string('title');
            $table->longText('description');
            $table->integer('start');
            $table->integer('finish');

            $table->timestamps();

            $table->foreign('serial_id')->references('id')->on('serials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::drop('seasons');
    }
}
