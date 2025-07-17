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
        Schema::create('music_statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('music_id')->constrained()->onDelete('cascade');
            $table->integer('plays')->default(0);
            $table->integer('downloads')->default(0);
            $table->timestamps();
            
            // Add unique constraint on music_id
            $table->unique('music_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_statistics');
    }
}; 