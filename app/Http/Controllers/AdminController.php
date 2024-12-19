<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Menampilkan form login admin
    public function showLoginForm()
    {
        return view('admin.adminlogin');
    }

    // Menangani proses login admin
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek login menggunakan guard admin
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['error' => 'Email atau password salah.']);
        }
    }

    // Menampilkan dashboard admin
    public function index()
    {
        return view('admin.admindashboard'); // Ganti dengan nama view dashboard admin yang sesuai
    }
    public function logout(Request $request)
    {
        // Logout admin
        auth('admin')->logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login admin
        return redirect('/')->with('success', 'Anda berhasil logout.');
    }

    public function scores()
    {
        // Ambil data skor beserta informasi user terkait
        $scores = Score::with('user')->get();
        return view('admin.skorsiswa', compact('scores'));
    }
    public function showQuestions()
    {
        $questions = Question::all(); // Ambil semua data dari tabel questions
        return view('admin.questions', compact('questions'));
    }

    // Questions
    // Method untuk menampilkan form tambah pertanyaan
    public function create()
    {
        return view('admin.create-questions');
    }

    // Method untuk menyimpan data ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|in:A,B,C,D', // Validasi hanya menerima A, B, C, atau D
        ]);

        // Simpan data ke tabel questions
        Question::create([
            'question' => $request->question,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'correct_answer' => $request->correct_answer, // Simpan sebagai A, B, C, atau D
        ]);

        // Redirect ke halaman daftar pertanyaan dengan pesan sukses
        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.edit-questions', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil dihapus!');
    }

}
