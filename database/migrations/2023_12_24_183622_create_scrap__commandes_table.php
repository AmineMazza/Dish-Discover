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
        Schema::create('scrap__commandes', function (Blueprint $table) {
            $table->id();
            $table->string('orderDate');
            $table->integer('quantity');
            $table->float('price');
            $table->string('paymentMethod');
            $table->string('restaurantAddress');
            $table->string('foodCategory');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrap__commandes');
    }
};
