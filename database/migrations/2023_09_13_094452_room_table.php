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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_capacity');
            $table->unsignedBigInteger('floor_id');
            $table->unsignedBigInteger('building_id');



            // $table->index('floor_id');
            // $table->index('building_id');

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('floor_id')
            ->references('floor_id')
            ->on('floor')
            ->cascadeOnDelete();

    $table->foreign('building_id')
            ->references('id')
            ->on('building')
            ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
