<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateB2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b2s', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('secondpart')->nullable()->comment('This one is situational for questions that require 2 sentences');
            $table->string('a');
            $table->string('b');
            $table->string('c');
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
        Schema::dropIfExists('b2s');
    }
}
