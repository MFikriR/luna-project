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
        'book' => 'buku'
    ];

    public function index()
    {
        $englishWord = array_rand($this->words); // Mengambil kata acak
        return view('tebak_arti_game', compact('englishWord'));
    }

    public function checkAnswer(Request $request)
    {
        $englishWord = $request->input('english_word');
        $userAnswer = strtolower($request->input('answer'));

        $correctAnswer = $this->words[$englishWord];

        if ($userAnswer === $correctAnswer) {
            $message = "Benar! Jawaban Anda tepat.";
        } else {
            $message = "Salah! Jawaban yang benar adalah '{$correctAnswer}'.";
        }

        return redirect()->route('tebak_arti_game')->with('message', $message);
    }

    public function showPercakapanGame()
    {
        return view('percakapan_game'); // Pastikan file ini ada di resources/views/games/percakapan.blade.php
    }

}
