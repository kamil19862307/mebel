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

            $table->string('name');
            $table->boolean('active');
            $table->double('price', 12, 2)->default(0);
            $table->unsignedBigInteger('category_id');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->text('description');
            $table->text('image');
            $table->integer('size')->nullable();
            $table->unsignedBigInteger('color_id');
            $table->foreignId('color_id')->references('id')->on('colors')->cascadeOnDelete();
            $table->unsignedBigInteger('brand_id');
            $table->foreignId('brand_id')->references('id')->on('brands')->cascadeOnDelete();
            $table->string('material')->nullable();
            $table->string('weight')->nullable();

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
