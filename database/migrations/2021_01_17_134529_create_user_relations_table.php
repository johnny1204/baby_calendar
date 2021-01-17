<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_relations', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('parent_user_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('relation_type')->unsigned();
            $table->timestamps();
            $table->foreign('parent_user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_relations');
    }
}
