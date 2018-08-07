<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookname');
            $table->string('ISBN');
            $table->string('booknumber');
            $table->string('bookprice');
            $table->string('writername');
            $table->string('category');
            $table->string('status');
            $table->string('booktype');
            $table->string('bookcondition');
            $table->string('details');
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
        Schema::dropIfExists('addbooks');
    }
}
