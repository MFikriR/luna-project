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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Relasi ke User
            $table->foreignId('question_id')->constrained()->onDelete('cascade');  // Relasi ke Question
            $table->text('answer');  // Jawaban yang diberikan siswa
            $table->boolean('is_correct');  // Apakah jawaban benar atau tidak
            $table->timestamps();  // Timestamps untuk mencatat kapan jawaban diberikan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
