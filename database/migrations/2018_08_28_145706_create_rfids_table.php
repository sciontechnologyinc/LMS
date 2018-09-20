<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('studentid');
            $table->string('studentname');
            $table->string('timestatus');
            $table->string('status');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE rfids AUTO_INCREMENT = 1;");
        DB::table('rfids')->where('id', 1)->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rfids');
    }
}
