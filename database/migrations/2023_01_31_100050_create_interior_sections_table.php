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
            $table->string('head')->nullable();
            $table->string('sub_head')->nullable();
            $table->string('icon')->nullable();
            $table->string('interior_title')->nullable();
            $table->text('description')->nullable();
            $table->string('button')->nullable();
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
