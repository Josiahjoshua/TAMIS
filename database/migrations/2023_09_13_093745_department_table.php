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
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('department_name', 15);
            $table->unsignedBigInteger('user_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints if needed
            $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->cascadeOnDelete();
        });
    }




    public function down()
    {
        Schema::dropIfExists('department');
    }
};

    /**
     * Reverse the migrations.
     */


