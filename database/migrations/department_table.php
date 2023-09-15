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
            $table->bigIncrements('department_id');
            $table->string('department_name', 15);
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->rememberToken();
            $table->timestamps();
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

