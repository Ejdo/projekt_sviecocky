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

        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->bigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('country');
            $table->string('first_name');
            $table->string('last_name', 50);
            $table->string('address', 100);
            $table->string('city', 100);
            $table->string('postal_code', 5);
            $table->string('phone_number', 15);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};