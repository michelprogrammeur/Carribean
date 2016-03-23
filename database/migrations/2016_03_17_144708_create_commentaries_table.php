<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name', 50);
            $table->text('content');
            $table->dateTime('published_at');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('SET NULL');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('commentaries');
    }
}
