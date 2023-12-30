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
        Schema::create('scrap__restos', function (Blueprint $table) {
            $table->id();
            $table->string('placeId')->nullable();
            $table->string('address')->nullable();
            $table->string('category')->nullable();
            $table->string('googleUrl')->nullable();
            $table->string('storeName')->nullable();
            $table->string('ratingText')->nullable();
            $table->float('stars')->nullable();
            $table->integer('numberOfReviews')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scrap_restos');
    }
};
