<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookname');
            $table->string('yearpublish');
            $table->string('ISBN');
            $table->string('booknumber');
            $table->string('bookprice');
            $table->string('writername');
            $table->string('categoryname');
            $table->string('status');
            $table->string('booktype');
            $table->string('bookcondition');
            $table->string('details');
            $table->string('digitalphoto');
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
        Schema::dropIfExists('books');
    }
}
