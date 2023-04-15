<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_category');
            $table->string('ean_code', 13);
            $table->string('name', 100);
            $table->string('description', 250);
            $table->float('price');
            $table->float('discount');
            $table->integer('stock');
            $table->bigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->bigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('product_type');
            $table->bigInteger('scent_id');
            $table->foreign('scent_id')->references('id')->on('scent_type');
            $table->bigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('color');
            $table->bigInteger('photo_id');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
