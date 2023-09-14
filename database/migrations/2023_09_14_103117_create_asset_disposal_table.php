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
        Schema::create('asset_disposal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_id');
            $table->string('asset_description', 100);
            $table->unsignedBigInteger('transferred_from');
            $table->unsignedBigInteger('transferred_to'); 
            $table->unsignedBigInteger('assettype_id');
            $table->unsignedBigInteger('condition_id');
            $table->timestamps();

            $table->foreign('transferred_from')
            ->references('id')
            ->on('room')
            ->cascadeOnDelete();
            $table->foreign('transferred_to')
            ->references('id')
            ->on('room')
            ->cascadeOnDelete();

            $table->foreign('assettype_id')->references('id')->on('asset_type')->cascadeOnDelete();
            $table->foreign('asset_id')->references('id')->on('asset')->cascadeOnDelete();
            $table->foreign('condition_id')->references('id')->on('condition')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_disposal');
    }
};
