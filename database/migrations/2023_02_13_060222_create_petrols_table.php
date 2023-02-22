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
        Schema::create('petrols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factory_id')->references('id')->on('factories')->onDelete('cascade');
            $table->string('title');
            $table->string('price');
            $table->string('volume');
            $table->string('image');
            $table->boolean('type')->default(false);
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
        Schema::dropIfExists('petrols');
    }
};