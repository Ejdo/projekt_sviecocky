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
            $table->string('ingredients', 250);
            $table->string('color', 20);
            $table->float('price');
            $table->float('discount');
            $table->integer('stock');
            $table->integer('burn_hours');
            $table->bigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->bigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('product_type');
            $table->bigInteger('scent_family_id');
            $table->foreign('scent_family_id')->references('id')->on('scent_family');
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