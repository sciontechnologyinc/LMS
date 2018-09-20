<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalsettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('systemname');
            $table->string('systememail');
            $table->string('systemcontactno');
            $table->string('uploadsystemlogo');
            $table->string('uploadfavicon');
            $table->string('address')->length(1000);
            $table->string('about')->length(1000);
            $table->string('mission')->length(1000);
            $table->string('vision')->length(1000);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE generalsettings AUTO_INCREMENT = 1;");
        DB::table('generalsettings')->where('id', 1)->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generalsettings');
    }
}
