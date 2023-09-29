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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name')->nullable();
            $table->string('p_detail')->nullable();
            $table->string('p_price')->nullable();
            $table->string('p_image')->nullable();
            $table->unsignedBigInteger('catogory_id');
            $table->foreign('catogory_id')->references('id')->on('catogories');
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
        Schema::dropIfExists('products');
    }
};
