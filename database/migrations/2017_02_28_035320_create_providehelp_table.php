<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidehelpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providehelp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gh_user_id');
            $table->string('ph_user_id');
            $table->string('ph_type');
            $table->string('verified');
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
        Schema::dropIfExists('providehelp');
    }
}
