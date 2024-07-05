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
        Schema::create('environment_scenario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('environment_id');
            $table->unsignedBigInteger('scenario_id');
            $table->timestamps();

            $table->foreign('environment_id')->references('id')->on('environments')->onDelete('cascade');
            $table->foreign('scenario_id')->references('id')->on('scenarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environment_scenario');
    }
};
