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
    Schema::create('section', function (Blueprint $table) {
        $table->id('section_id');
        $table->string('section_name');
        $table->primary('section_id');
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('department_id');
        $table->index('user_id');
        $table->index('department_id');



        $table->rememberToken();
        $table->timestamps();

     });
    }


        // $table->unsignedBigInteger('user_id');





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section');
    }
};
