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
        Schema::table('careers', function (Blueprint $table) {
        $table->string('job_type')->nullable(); 
        $table->string('experience')->nullable(); 
    });
    }

    /**
     * Reverse the migrations.
     */
   public function down()
    {
        Schema::table('careers', function (Blueprint $table) {
            $table->dropColumn(['job_type', 'experience']);
        });
    }
};
