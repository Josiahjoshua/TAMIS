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

        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('role_name', 100);
            $table->rememberToken();
            $table->timestamps();
            // Define foreign key constraints if needed
            // $table->foreign('assettype_id')->references('id')->on('assettypes');
            // $table->foreign('condition_id')->references('id')->on('conditions');
        });
    }


    public function down()
    {
        Schema::dropIfExists('role');
    }
};

    /**
     * Reverse the migrations.
     */


