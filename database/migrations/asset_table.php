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

        Schema::create('asset', function (Blueprint $table) {
            $table->bigIncrements('asset_id');
            $table->string('asset_no', 50);
            $table->string('asset_description', 100);
            $table->string('serial_no', 30)->nullable();
            $table->float('cost');
            $table->unsignedBigInteger('assettype_id');
            $table->unsignedBigInteger('condition_id');
            // $table->index('assettype_id');
            // $table->index('condition_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints
             $table->foreign('assettype_id')
               ->references('assettype_id')->on('asset_type')
               ->cascadeOnDelete();

             $table->foreign('condition_id')
               ->references('condition_id')
               ->on('conditions')
               ->cascadeOnDelete();


        });
    }


    public function down()
    {
        Schema::dropIfExists('asset');
    }
};

    /**
     * Reverse the migrations.
     */

