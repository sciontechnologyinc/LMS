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
            $table->string('department')->nullable();
            $table->string('subject')->nullable();
            $table->string('livingaddress');
            $table->string('photo');
            $table->string('timestatus')->nullable();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE members AUTO_INCREMENT = 1;");
        DB::table('members')->where('id', 1)->delete();
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
