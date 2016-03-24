<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mariage_id')->unsigned()->nullable();
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('status', ['admin', 'maries', 'invites'])->default('invites');
            $table->foreign('mariage_id')->references('id')->on('mariages')->onDelete('SET NULL');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
