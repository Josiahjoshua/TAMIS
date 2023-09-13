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
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('user')
                    ->cascadeOnDelete();
            $table->foreign('department_id')
                    ->references('id')
                    ->on('department')
                    ->cascadeOnDelete();
            $table->foreign('asset_id')
                    ->references('id')
                    ->on('asset')
                    ->cascadeOnDelete();
            $table->foreign('assettype_id')
                    ->references('id')
                    ->on('asset_type')
                    ->cascadeOnDelete();
                    
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


