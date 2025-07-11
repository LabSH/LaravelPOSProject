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
        Schema::create('member_ones', function (Blueprint $table) {
            $table->id();
            
            $table->string('uid',20);
            $table->string('pwd',255);
            $table->string('name',20);

            $table->string('phone',11)->nullable();
            $table->tinyinteger('rank')->nullable()->default(0);

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
        Schema::dropIfExists('member_ones');
    }
};
