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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academic_level');
            $table->unsignedBigInteger('paper_type');
            $table->unsignedBigInteger('subject_id');
            $table->string('topic');
            $table->text('instructions');
            $table->string('english_type');
            $table->unsignedBigInteger('style_id');
            $table->decimal('discount_amount', 8, 2)->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->string('file')->nullable();
            $table->unsignedBigInteger('urgency_id');
            $table->integer('pages');
            $table->string('spacing')->nullable();
            $table->integer('sources')->nullable();
            $table->integer('charts')->nullable();
            $table->integer('slides')->nullable();
            $table->unsignedBigInteger('writer_category_id');
            $table->json('feature_ids')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
