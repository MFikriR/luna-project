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

        // Total pertanyaan
        $totalQuestions = Question::count();

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
                    'question_id' => $question_id,
                    'answer' => $answer,
                    'is_correct' => $question->correct_answer == $answer,
                ]);
            }
        }

        // Menghitung skor akhir dalam bentuk persentase
        $finalScore = round(($score / $totalQuestions) * 100, 2); // Persentase dengan 2 desimal

        // Simpan atau update skor di database
        $existingScore = Score::where('user_id', $user->id)->first();
        if ($existingScore) {
            $existingScore->score = $finalScore;
            $existingScore->attempts += 1;
            $existingScore->save();
        } else {
            Score::create([
                'user_id' => $user->id,
                'score' => $finalScore,
                'attempts' => 1,
            ]);
        }

        // Redirect ke halaman hasil
        return view('result', [
            'user' => $user,
            'score' => $finalScore,
            'totalQuestions' => $totalQuestions,
        ]);
    }



    public function showQuiz()
{
    $user = Auth::user();  // Mendapatkan data pengguna yang sedang login

    // Ambil skor pengguna berdasarkan user_id
    $score = Score::where('user_id', $user->id)->first();

    // Jika skor ditemukan dan percobaan >= 3, arahkan ke hasil
    if ($score && $score->attempts >= 3) {
        return redirect()->route('quiz.result')->with('message', 'Anda telah mencapai batas maksimal percobaan.');
    }

    // Jika skor tidak ditemukan (belum pernah mengerjakan), tampilkan kuis
    if (!$score || $score->attempts == 0) {
        // Ambil soal-soal kuis jika belum ada skor atau percobaan pertama
        $questions = Question::all();
        return view('evaluation', compact('questions', 'user'));  // Kirim $user ke view
    }

    // Jika sudah ada percobaan, arahkan ke halaman hasil
    return redirect()->route('quiz.result');
}



    public function quizResult()
    {
        $user = Auth::user();  // Mendapatkan data pengguna yang sedang login

        // Ambil skor pengguna berdasarkan user_id
        $score = Score::where('user_id', $user->id)->first();
        $questions = Question::all(); // Ambil semua soal untuk menghitung jumlah soal

        if (!$score) {
            // Jika skor tidak ditemukan, arahkan kembali
            return redirect()->route('quiz.start')->with('message', 'Anda belum mengikuti kuis.');
        }

        $totalQuestions = $questions->count(); // Menghitung jumlah soal

        // Tampilkan halaman hasil kuis
        return view('result', compact('score', 'user', 'questions', 'totalQuestions'));
    }
    public function retryQuiz()
    {
        $user = Auth::user();

        // Ambil skor pengguna berdasarkan user_id
        $score = Score::where('user_id', $user->id)->first();

        // Jika skor tidak ditemukan atau user sudah mencapai batas percobaan
        if (!$score || $score->attempts >= 3) {
            return redirect()->route('quiz.result')->with('message', 'Anda tidak dapat melakukan retry, sudah mencapai batas percobaan.');
        }

        // Tambahkan percobaan baru
        $score->increment('attempts');
        $score->save();

        // Redirect ke halaman kuis
        return redirect()->route('quiz.start');
    }

}
