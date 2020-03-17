<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dev_id');
            $table->string('name');
            $table->string('img');
            $table->string('link');
            $table->string('upload');
            $table->string('rating');
            $table->string('views');
            $table->string('desc');
            $table->boolean('approve');
            $table->timestamps();
            $table->foreign('dev_id')
            ->references('id')
            ->on('developer')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_table_');
    }
}
