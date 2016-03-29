<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mariage_id')->unsigned()->nullable();
            $table->string('title', 100);
            $table->text('content');
            $table->enum('status', ['published', 'unpublished'])->default('unpublished');
            $table->dateTime('published_at');
            $table->foreign('mariage_id')->references('id')->on('mariages')->onDelete('SET NULL');
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
        Schema::drop('articles');
    }
}
