<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CeateTableGethelpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gethelp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('accountnumber');
            $table->string('accounttype');
            $table->string('user_id');
            $table->string('bankname');
            $table->string('gh_type');
            $table->string('confirm');
            
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
        Schema::dropIfExists('gethelp');
    }
}
