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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('u_name')->nullable();
            $table->string('u_email')->nullable();
            $table->string('u_phone')->nullable();
            $table->string('u_address')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_detail')->nullable();
            $table->string('p_price')->nullable();
            $table->string('p_quantity')->nullable();
            $table->string('total_product_price')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
