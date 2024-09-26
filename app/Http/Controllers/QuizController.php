<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Menampilkan halaman quiz
    public function showQuiz()
    {
        return view('quiz');
    }

    // Proses jawaban yang dikirim melalui form
    public function submitAnswer(Request $request)
    {
        // Jawaban benar (dapat diambil dari database atau hardcoded)
        $correctAnswer = "i enjoy reading books and watching movies";

        // Ambil jawaban dari form
        $userAnswer = strtolower(trim($request->input('answer')));

        // Cek apakah jawaban benar atau salah
        if ($userAnswer === $correctAnswer) {
            $result = "Correct! You enjoy reading books and watching movies.";
            $status = "correct";
        } else {
            $result = "Incorrect. Try again!";
            $status = "incorrect";
        }

        // Kirim hasilnya kembali ke halaman quiz
        return view('quiz', [
            'result' => $result,
            'status' => $status
        ]);
    }
}
