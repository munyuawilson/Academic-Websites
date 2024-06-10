<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Change column types
            $table->string('academic_level_id')->change();
            $table->string('paper_type_id')->change();
            $table->string('subject_id')->change();
            $table->string('style_id')->change();
            $table->string('writer_category_id')->change();
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Revert column types back to original
            $table->unsignedBigInteger('academic_level_id')->change();
            $table->unsignedBigInteger('paper_type_id')->change();
            $table->unsignedBigInteger('subject_id')->change();
            $table->unsignedBigInteger('style_id')->change();
            $table->unsignedBigInteger('writer_category_id')->change();
        });
    }
}

