<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();  // ID unik untuk soal
            $table->text('question');  // Teks soal
            $table->text('option_1');  // Pilihan 1
            $table->text('option_2');  // Pilihan 2
            $table->text('option_3');  // Pilihan 3
            $table->text('option_4');  // Pilihan 4
            $table->string('correct_answer');  // Jawaban yang benar (bisa berupa option_1, option_2, option_3, atau option_4)
            $table->timestamps();  // Timestamps untuk mencatat waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
