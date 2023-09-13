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
            $table->bigIncrements('asset_assignment_id');
            $table->string('remarks');
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('assettype_id');
            $table->unsignedBigInteger('condition_id');
            $table->unsignedBigInteger('employee_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('assettype_id')
                ->references('assettype_id')
                ->on('asset_type') // Corrected table name
                ->onDelete('cascade');

            $table->foreign('condition_id')
                ->references('condition_id')
                ->on('conditions')
                ->onDelete('cascade');

            $table->foreign('asset_id')
                ->references('asset_id')
                ->on('asset') // Corrected table name
                ->onDelete('cascade');

            $table->foreign('employee_id')
                ->references('employee_id')
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

