<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_ones', function (Blueprint $table) {
            $table->id();
            $table->integer('product_ones_id')->nullable;
            $table->integer('member_ones_id')->nullable();
            $table->integer('count')->nullable()->default(1);
            $table->integer('total_price')->nullable();
            $table->string('coment',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_ones');
    }
};
