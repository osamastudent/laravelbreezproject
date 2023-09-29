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
        Schema::create('addtocarts', function (Blueprint $table) {
            $table->id();
            $table->string('p_name')->nullable();
            $table->string('p_detail')->nullable();
            $table->string('p_quantity')->nullable();
            $table->string('p_price')->nullable();
            $table->string('p_image')->nullable();
            $table->string('u_phone')->nullable();
            $table->string('u_address')->nullable();
            $table->string('u_email')->nullable();
            $table->string('p_password')->nullable();
         
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
        Schema::dropIfExists('addtocarts');
    }
};
