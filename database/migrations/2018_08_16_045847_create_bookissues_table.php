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
            $table->string('bookname')->nullable();
            $table->string('name')->nullable();
            $table->string('ISBN')->nullable();
            $table->string('booknumber')->nullable();
            $table->string('bookprice')->nullable();
            $table->string('writername')->nullable();
            $table->string('bookholder')->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('hour_from')->nullable();
            $table->string('hour_to')->nullable();
            $table->string('difference')->nullable();
            $table->string('status')->default('Pending');
            $table->string('hours')->nullable();
            $table->timestamps();
            $table->time('deleted_at')->nullable();
        });
        DB::statement("ALTER TABLE bookissues AUTO_INCREMENT = 1;");
        DB::table('bookissues')->where('id', 1)->delete();
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
