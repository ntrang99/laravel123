<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLovefoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lovefoods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->integer('qualtity');
            $table->integer('price');
            $table->boolean('soldout');
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
        Schema::dropIfExists('lovefoods');
    }
}
