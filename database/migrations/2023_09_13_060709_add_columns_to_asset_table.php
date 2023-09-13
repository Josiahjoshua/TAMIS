<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('assets.asset', function (Blueprint $table) {
            $table->decimal('accumulated_depreciation', 10, 2)->nullable();
            $table->date('acquisition_date')->nullable();
            $table->string('acquisition_type')->nullable();
            $table->string('gfs_code')->nullable();
            $table->string('gfs_description')->nullable();
            $table->text('remarks')->nullable();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asset', function (Blueprint $table) {
            //
        });
    }
};
