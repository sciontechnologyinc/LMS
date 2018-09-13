<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membername');
            $table->string('gender');
            $table->string('contactnumber');
            $table->string('email');
            $table->string('LRN');
            $table->string('profession');
            $table->string('department');
            $table->string('subject');
            $table->string('livingaddress');
            $table->string('photo');
            $table->string('timestatus')->nullable();
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
        Schema::dropIfExists('members');
    }
}
