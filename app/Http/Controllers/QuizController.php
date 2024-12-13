<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Question; // Gunakan model Question dari App\Models
use App\Models\Answer;  // Model Answer untuk menyimpan jawaban
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function submitQuiz(Request $request)
    {
        $user = Auth::user();
        $score = 0;

        // Validasi input agar jawaban wajib ada
        $request->validate([
            'answers' => 'required|array',
        ]);

        // Cek jawaban soal dan hitung skor
        foreach ($request->answers as $question_id => $answer) {
            $question = Question::find($question_id);

            if ($question) {
                // Hitung skor
                if ($question->correct_answer == $answer) {
                    $score++;
                }

                // Simpan jawaban ke tabel answers
                Answer::create([
                    'user_id' => $user->id,
                    'question_id' => $question_id,  // Menyimpan ID soal, bukan teks soal
                    'answer' => $answer,
                    'is_correct' => $question->correct_answer == $answer,  // Cek apakah jawaban benar
                ]);
            }
        }

        // Cek apakah skor untuk user ini sudah ada sebelumnya
        $existingScore = Score::where('user_id', $user->id)->first();  // Hanya berdasarkan user_id

        if ($existingScore) {
            // Jika sudah mencapai batas percobaan dan nilai sudah final
            if ($existingScore->attempts >= 2) {
                // Update status final jika sudah mencapai batas percobaan
                $existingScore->is_final = true;
                $existingScore->save();
                return redirect()->route('quiz.result')->with('message', 'Nilai Anda sudah final, Anda sudah mencapai batas percobaan.');
            }

            // Jika belum mencapai batas percobaan, update skor dan percobaan
            $existingScore->attempts += 1;
            $existingScore->score = $score;  // Update skor
            $existingScore->save();

            return redirect()->route('quiz.result')->with('message', 'Skor Anda telah diperbarui.');
        } else {
            // Buat entri baru untuk skor jika belum ada
            Score::create([
                'user_id' => $user->id,
                'score' => $score,
                'attempts' => 1,
            ]);

            return redirect()->route('quiz.result')->with('message', 'Skor pertama Anda berhasil disimpan.');
        }
    }

    public function showQuiz()
    {
        // Mengambil soal-soal dari database
        $questions = Question::all();

        // Menampilkan halaman kuis dengan view evaluation
        return view('evaluation', compact('questions'));
    }

    public function quizResult()
    {
        $user = Auth::user();

        // Ambil skor dan informasi kuis
        $score = Score::where('user_id', $user->id)->first();
        $questions = Question::all(); // Total soal untuk menampilkan nilai maksimal

        if (!$score) {
            // Jika skor tidak ditemukan, arahkan kembali
            return redirect()->route('quiz.start')->with('message', 'Anda belum mengikuti kuis.');
        }

        // Tampilkan halaman hasil kuis
        return view('result', compact('score', 'questions'));
    }
}
