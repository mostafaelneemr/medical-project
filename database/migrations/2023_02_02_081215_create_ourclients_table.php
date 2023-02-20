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
        Schema::create('ourclients', function (Blueprint $table) {
            $table->id();
            $table->string('head')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('title_name')->nullable();
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
        Schema::dropIfExists('ourclients');
    }
};
