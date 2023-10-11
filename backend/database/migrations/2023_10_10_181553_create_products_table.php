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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('capacity');
            $table->string('price');
            $table->string('description');
            $table->string('property_image');
            $table->string('url_image');
            $table->string('owner_certificate');
            $table->string('url_certificate');
            $table->boolean('is_verified');
            $table->boolean('is_ready');
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
        Schema::dropIfExists('products');
    }
};