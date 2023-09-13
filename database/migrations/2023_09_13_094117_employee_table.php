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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('user_id');
            // $table->index('department_id');
            // $table->index('section_id');
            // $table->index('user_id');
            $table->rememberToken();
            $table->timestamps();

            // Define foreign key constraints if needed
            $table->foreign('department_id')
                ->references('id')
                ->on('department')
                ->cascadeOnDelete();

                $table->foreign('section_id')
                ->references('id')
                ->on('section')
                ->cascadeOnDelete();

                $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->cascadeOnDelete();


        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
