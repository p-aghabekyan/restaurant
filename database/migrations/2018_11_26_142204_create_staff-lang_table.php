<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stuff_id');
            $table->unsignedInteger('language_id');
            $table->foreign('stuff_id')->references('id')->on('stuffs');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->string('firstname', '255');
            $table->string('lastname', '255');
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
