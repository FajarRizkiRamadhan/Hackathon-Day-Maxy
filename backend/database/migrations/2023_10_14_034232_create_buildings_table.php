<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('facility');
            $table->string('location');
            $table->string('city'); 
            $table->string('province');
            $table->string('size');
            $table->string('capacity');
            $table->string('accommodate');
            $table->string('description');
            $table->string('price');
            $table->string('category');
            $table->string('sub_category');
            $table->string('name_image');
            $table->string('property_image');
            $table->string('url_image');
            $table->integer('owner_id')->unsigned();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
};
