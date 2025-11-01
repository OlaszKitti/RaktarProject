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
        Schema::create('top_music', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', length: 100);
            $table->string('artist', length: 100);
            $table->integer(column: 'lenght');
            $table->integer('release_year');
            $table->string('nationality', length: 100);
            $table->integer('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_music');
    }
};
