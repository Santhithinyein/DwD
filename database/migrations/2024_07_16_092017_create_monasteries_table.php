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
        Schema::create('monasteries', function (Blueprint $table) {
            $table->id();
            $table->string('monasteryName');
            $table->string('monkName');
            $table->string('address');
            $table->double('phNo');
            $table->integer('building');
            $table->integer('monkNo');
            $table->boolean('mStatus');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monasteries');
    }
};
