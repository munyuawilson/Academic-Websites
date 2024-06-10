<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyOrdersTableNullableColumns extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('spacing')->nullable()->change();
            $table->string('writer_category_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('spacing')->nullable(false)->change();
            $table->string('writer_category_id')->nullable(false)->change();
        });
    }
}

