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
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'spacing')) {
                $table->string('spacing')->nullable()->change();
            } else {
                $table->string('spacing')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Add logic to reverse the change if necessary
            if (Schema::hasColumn('orders', 'spacing')) {
                $table->string('spacing')->nullable(false)->change();
            }
        });
    }
};
