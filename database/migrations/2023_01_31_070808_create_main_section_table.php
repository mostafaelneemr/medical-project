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
        Schema::create('main_section', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('subtitle');
            $table->text('description');
            $table->string('image');
            $table->string('button')->nullable();
            $table->enum('publish', ['1','0'])->default('1');
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
        Schema::dropIfExists('main_section');
    }
};
