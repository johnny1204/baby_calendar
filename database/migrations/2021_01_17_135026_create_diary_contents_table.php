<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_contents', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('child_id')->unsigned();
            $table->dateTime('evented_at');
            $table->tinyInteger('toilet_small')->default(false);
            $table->tinyInteger('toilet_big')->default(false);
            $table->integer('milk')->nullable();
            $table->tinyInteger('sleep')->default(false);
            $table->text('meal')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('child_id')->references('id')->on('children');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diary_contents');
    }
}
