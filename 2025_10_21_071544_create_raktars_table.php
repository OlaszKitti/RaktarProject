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
        Schema::create('raktars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', length: 100);
            $table->string('author', length: 100);
            $table->string('language', length: 30);
            $table->string('category', length: 100);
            $table->string('publisher', length: 100);
            $table->integer('release_year');
            $table->integer('price');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('raktars');
    }
};
