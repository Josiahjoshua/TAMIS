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
        Schema::create('transfer_history', function (Blueprint $table) {
            $table->bigIncrements('transfer_history_id');
            $table->string('transferred_from', 100);
            $table->string('transferred_to', 100);
            $table->string('quantity');
            $table->string('date_transferred');

            $table->foreign('asset_id')
                    ->references('asset_id')
                    ->on('asset')
                    ->cascadeOnDelete();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('user')
                    ->cascadeOnDelete();
            $table->foreign('condition_id')
                    ->references('id')
                    ->on('condition')
                    ->cascadeOnDelete();
            $table->foreign('room_id')
                    ->references('room_id')
                    ->on('room')
                    ->cascadeOnDelete();
            // $table->index('asset_id');
            // $table->index('user_id');
            // $table->index('condition_id');
            // $table->index('room_id');

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_history');
    }
};
