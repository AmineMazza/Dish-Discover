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
            $table->string('Name');
            $table->integer('nombre');
            $table->float('prix');
            $table->string('address');
            $table->string('ville');
           
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
