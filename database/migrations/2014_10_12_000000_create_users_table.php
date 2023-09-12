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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            // $table->id(`user_id`);
            $table->string('full_name');
            $table->string('username')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->index('role_id');

            $table->rememberToken();
            $table->timestamps();
        });
    }

            // $table->string('photo')->nullable();
            // $table->string('address')->nullable();
            // $table->enum('status',['active','inactive'])->default('active');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
