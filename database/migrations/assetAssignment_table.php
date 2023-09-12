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

            $table->id('assetAssignment_id')->primary();
            $table->string('remarks');
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('condition_id');
            $table->unsignedBigInteger('employee_id');

            $table->index('assettype_id');
            $table->index('condition_id');
            $table->index('asset_id');
            $table->index('employee_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints if needed
            // $table->foreign('assettype_id')->references('id')->on('assettypes');
            // $table->foreign('condition_id')->references('id')->on('conditions');
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

