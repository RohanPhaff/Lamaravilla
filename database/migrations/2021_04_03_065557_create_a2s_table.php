<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateA2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a2s', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('secondpart')->nullable()->comment('This one is situational for questions that require 2 sentences');
            $table->string('thirdpart')->nullable();
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('correctanswer');
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
        Schema::dropIfExists('a2s');
    }
}
