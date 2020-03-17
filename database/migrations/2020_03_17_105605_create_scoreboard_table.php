<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoreboard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('g_id');
            $table->unsignedBigInteger('u_id');
            $table->timestamps();
            $table->foreign('g_id')
            ->references('id')
            ->on('game')
            ->onDelete('cascade');
            $table->foreign('u_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('scoreboard');
    }
}
