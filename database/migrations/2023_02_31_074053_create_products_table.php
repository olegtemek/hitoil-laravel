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
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('price');
            $table->string('model')->nullable();
            $table->string('base')->nullable();
            $table->longText('images')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreignId('volume_id')->references('id')->on('volumes')->onDelete('cascade');
            $table->foreignId('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreignId('viscosity_id')->references('id')->on('viscosities')->onDelete('cascade');
            $table->boolean('popular')->default(false);
            $table->longText('description')->nullable();
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
