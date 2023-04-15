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

        Schema::create('scent_families', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scent1_id');
            $table->foreign('scent1_id')->references('id')->on('scent_types');
            $table->bigInteger('scent2_id');
            $table->foreign('scent2_id')->references('id')->on('scent_types');
            $table->bigInteger('scent3_id');
            $table->foreign('scent3_id')->references('id')->on('scent_types');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scent_families');
    }
};
