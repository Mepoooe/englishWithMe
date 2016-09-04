<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Baner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name1');
            $table->string('img1');
            $table->string('name2');
            $table->string('img2');
            $table->string('name3');
            $table->string('img3');
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
        //
    }
}
