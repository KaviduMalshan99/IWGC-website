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
        Schema::table('online_payments', function (Blueprint $table) {

            // Add new columns
            $table->string('receipt_no')->nullable()->after('status');
            $table->string('receipt_path')->nullable()->after('receipt_no');
            $table->string('admin_status')->default('pending')->after('receipt_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('online_payments', function (Blueprint $table) {

            // Drop columns
            $table->dropColumn(['receipt_no', 'receipt_path', 'admin_status']);
        });
    }
};
