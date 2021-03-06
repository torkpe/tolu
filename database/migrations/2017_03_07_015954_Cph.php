<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cph extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('Cph', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('ph');
            $table->string('gh');
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
        //
    }
}
