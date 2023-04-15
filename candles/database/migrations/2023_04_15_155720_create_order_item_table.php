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

        Schema::create('order_item', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->bigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->integer('quantity');
            $table->float('price');
            $table->float('discount');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};
