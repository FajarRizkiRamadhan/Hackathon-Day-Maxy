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
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id");
            $table->integer("building_id");
            $table->integer("use_case_id");
            $table->integer("sub_use_case_id");
            $table->string("name");
            $table->string("capacity");
            $table->string("price");
            $table->string("description");
            $table->string("property_image");
            $table->string("url_image");
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
        Schema::dropIfExists('rooms');
    }
};
