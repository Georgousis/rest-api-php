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

            $table->integer('billing_address_id')->foreign('billing_address_id')->references('id')->on('addresses');
            $table->integer('shipping_address_id')->foreign('shipping_address_id')->references('id')->on('addresses');
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
            
            $table->timestamps();
            $table->softDeletes();

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
