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
    Schema::create('scores', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained();  // Relasi ke tabel user
        $table->integer('score');  // Skor kuis
        $table->integer('attempts')->default(0);  // Jumlah percobaan
        $table->boolean('is_final')->default(false);  // Menentukan apakah nilai sudah final
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
