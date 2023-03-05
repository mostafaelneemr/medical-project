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
            $table->string('icon');
            $table->string('interior_title');
            $table->text('description');
            $table->string('button');
            $table->enum('publish', ['1','0'])->default('1'); // publish = 1 // un publish 0 
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
