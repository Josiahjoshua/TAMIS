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
            $table->bigIncrements('employee_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('user_id');
            $table->index('department_id');
            $table->index('section_id');
            $table->index('user_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();

            // $table->string('photo')->nullable();

            // $table->string('address')->nullable();
            // $table->enum('status',['active','inactive'])->default('active');


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
