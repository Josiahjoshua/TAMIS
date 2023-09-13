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
        Schema::create('floor', function (Blueprint $table) {
            $table->bigIncrements('floor_id');
            $table->string('floor_name');
            $table->unsignedBigInteger('building_id');

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('building_id')
            ->references('building_id')
            ->on('building')
            ->cascadeOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('floor');
    }
};
