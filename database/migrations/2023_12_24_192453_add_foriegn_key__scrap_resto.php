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
        // Schema::table('scrap__restos', function (Blueprint $table) {
        //     $table->unsignedBigInteger('offre_id')->default(1); // La valeur par défaut "1"
        //     $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade'); 
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
