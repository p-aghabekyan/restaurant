<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest_language', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','150');
            $table->string('address','255');
            $table->text('description');
            $table->unsignedInteger('restaurant_id');
            $table->unsignedInteger('language_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade') ;
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
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
        Schema::dropIfExists('rest_language');
    }
}
