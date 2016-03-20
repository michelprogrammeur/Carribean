<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMariagepicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mariagepictures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mariages_id')->unsigned()->nullable();
            $table->string('name', 100);
            $table->string('uri');
            $table->dateTime('published_at');
            $table->enum('status', ['published', 'unpublished'])->default('unpublished');
            $table->foreign('mariages_id')->references('id')->on('mariages')->onDelete('SET NULL');
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
        Schema::drop('mariagepictures');
    }
}
