<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookissuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookissues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookname');
            $table->string('bookholder');
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('hour_from')->nullable();
            $table->string('hour_to')->nullable();
            $table->string('difference')->nullable();
            $table->string('hours')->nullable();
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
        Schema::dropIfExists('bookissues');
    }
}
