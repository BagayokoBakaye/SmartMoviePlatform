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
        Schema::create('personnage_scenario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personnage_id');
            $table->unsignedBigInteger('scenario_id');
            $table->timestamps();

            $table->foreign('personnage_id')->references('id')->on('personnages')->onDelete('cascade');
            $table->foreign('scenario_id')->references('id')->on('scenarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnage_scenario');
    }
};
