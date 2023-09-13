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

        Schema::create('asset_assignment', function (Blueprint $table) {
            $table->id();
            $table->string('remarks');
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('assettype_id');
            $table->unsignedBigInteger('condition_id');
            $table->unsignedBigInteger('employee_id');

            // $table->index('assettype_id');
            // $table->index('condition_id');
            // $table->index('asset_id');
            // $table->index('employee_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('asset_id')
            ->references('id')
            ->on('asset') // Corrected table name
            ->onDelete('cascade');

            $table->foreign('assettype_id')
                ->references('id')
                ->on('asset_type') // Corrected table name
                ->onDelete('cascade');

            $table->foreign('condition_id')
                ->references('condition_id')
                ->on('condition')
                ->cascadeOnDelete();


                $table->foreign('asset_id')
                ->references('asset_id')
                ->on('employee')
                ->cascadeOnDelete();


                $table->foreign('employee_id')
                ->references('employee_id')
                ->on('condition')
                ->cascadeOnDelete();

            $table->foreign('employee_id')
                ->references('id')
                ->on('employee')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('asset_assignment');
    }
};

    /**
     * Reverse the migrations.
     */

