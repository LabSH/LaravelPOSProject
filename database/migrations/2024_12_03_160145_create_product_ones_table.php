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
        Schema::create('product_ones', function (Blueprint $table) {
            $table->id();
            $table->integer('gubuns_ones_id')->nullable;
            $table->string('name',50)->nullable();
            $table->integer('price')->nullable();
            $table->string('pic',255)->nullable();
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
        Schema::dropIfExists('product_ones');
    }
};
