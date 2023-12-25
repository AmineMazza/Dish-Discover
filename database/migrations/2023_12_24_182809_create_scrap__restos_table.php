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
            $table->string('placeId');
            $table->string('address');
            $table->string('category');
            $table->string('googleUrl');
            $table->string('storeName');
            $table->string('ratingText');
            $table->float('stars');
            $table->integer('numberOfReviews');
            $table->float('latitude');
            $table->float('longitude');
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
