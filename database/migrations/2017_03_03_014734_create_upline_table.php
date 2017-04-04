<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUplineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upline', function (Blueprint $table) {

            $table->increments('id');
            $table->string('ph_user');
            $table->string('body');
            $table->string('image');
            $table->integer('ph_user_id');
            $table->integer('gh_user_id');
            $table->string('ph_type');
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
        Schema::dropIfExists('upline');
    }
}
