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
            $table->id();
            $table->string('asset_no', 50);
            $table->string('asset_description', 100);
            $table->string('serial_no', 30)->nullable();
            $table->float('cost');


            $table->unsignedBigInteger('assettype_id');
            $table->unsignedBigInteger('condition_id');
            $table->string('gfs_code');
            $table->string('gfs_description');
            $table->float('accumulated_depriciation');
            $table->string('acquisition_date');
            $table->string('registered_date');

            $table->string('remarks');

            // $table->index('assettype_id');
            // $table->index('condition_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints
             $table->foreign('assettype_id')
               ->references('id')
               ->on('asset_type')
               ->cascadeOnDelete();

             $table->foreign('condition_id')
               ->references('id')
               ->on('condition')
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

