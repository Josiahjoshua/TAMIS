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

        Schema::create('request', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->string('request_description', 100);
            $table->enum('status',['Pending','Approved', 'Rejected'])->default('Pending');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('asset_id');
            $table->unsignedBigInteger('assettype_id');
            $table->index('user_id');
            $table->index('department_id');
            $table->index('asset_id');
            $table->index('assettype_id');
            $table->rememberToken();
            $table->timestamps();
            // Define foreign key constraints if needed
            // $table->foreign('assettype_id')->references('id')->on('assettypes');
            // $table->foreign('condition_id')->references('id')->on('conditions');
        });
    }


    public function down()
    {
        Schema::dropIfExists('request');
    }
};

    /**
     * Reverse the migrations.
     */


