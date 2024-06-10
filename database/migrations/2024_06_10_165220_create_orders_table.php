<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->startingValue(1000);
            $table->string('academic_level_id');
            $table->string('paper_type_id');
            $table->string('subject_id');
            $table->string('topic');
            $table->text('instructions');
            $table->string('english_type');
            $table->string('style_id');
            $table->decimal('discount_amount', 8, 2)->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->string('file_path')->nullable();
            $table->unsignedBigInteger('urgency_id');
            $table->integer('pages');
            $table->string('spacing');
            $table->integer('sources');
            $table->integer('charts');
            $table->integer('slides');
            $table->string('writer_category_id');
            $table->json('feature_ids')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
