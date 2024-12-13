<?php

// app/Http/Controllers/GameController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private $words = [
        'apple' => 'apel',
        'dog' => 'anjing',
        'house' => 'rumah',
        'car' => 'mobil',
        'book' => 'buku',
        'tree' => 'pohon',
        'computer' => 'komputer',
        'school' => 'sekolah',
        'pen' => 'pena',
        'water' => 'air'
    ];

    // Menampilkan game dengan kata-kata acak
    public function index()
    {
        // Mengambil 10 kata secara acak
        $selectedWords = array_rand($this->words, 10);
        
        // Mengambil array kata-kata yang dipilih
        $wordsToGuess = [];
        foreach ($selectedWords as $word) {
            $wordsToGuess[$word] = $this->words[$word];
        }

        // Menampilkan halaman dengan kata-kata yang dipilih
        return view('tebak_arti_game', compact('wordsToGuess'));
    }

    // Memeriksa jawaban pengguna
    public function checkAnswer(Request $request)
    {
        $userAnswers = $request->input('answers'); // Array jawaban yang dikirim
        $feedback = []; // Menyimpan feedback untuk tiap kata
        $correctAnswers = 0;

        foreach ($userAnswers as $word => $answer) {
            $correctAnswer = $this->words[$word];
            if (strtolower(trim($answer)) == strtolower($correctAnswer)) {
                $feedback[] = [
                    'word' => $word,
                    'status' => 'benar',
                    'correct_answer' => $correctAnswer
                ];
                $correctAnswers++;
            } else {
                $feedback[] = [
                    'word' => $word,
                    'status' => 'salah',
                    'correct_answer' => $correctAnswer
                ];
            }
        }

        // Mengirimkan hasil dan feedback ke tampilan
        return redirect()->route('tebak_arti_game')->with([
            'message' => "Nilai Anda: $correctAnswers / 10",
            'feedback' => $feedback
        ]);
    }


    public function showPercakapanGame()
    {
        return view('percakapan_game'); // Pastikan file ini ada di resources/views/games/percakapan.blade.php
    }

}
