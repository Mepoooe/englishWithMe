<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_article');
            $table->string('tag_article');
            $table->string('short_content');
            $table->string('content');
            $table->string('article_img');
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
