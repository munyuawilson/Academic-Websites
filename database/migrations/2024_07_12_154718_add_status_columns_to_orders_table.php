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
            $table->boolean('paid')->nullable()->after('total_price'); // Adding a 'paid' column
            $table->boolean('revision')->nullable()->after('paid');   // Adding a 'revision' column
            $table->boolean('disputed')->nullable()->after('revision'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['paid', 'revision', 'disputed']);
        });
    }
};
