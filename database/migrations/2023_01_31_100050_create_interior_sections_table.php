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
        Schema::create('interior_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('subtitle',);
            $table->string('image');
            $table->string('interior_title');
            $table->string('description');
            $table->string('button');
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
        Schema::dropIfExists('interior_sections');
    }
};
