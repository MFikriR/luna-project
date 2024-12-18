<?php

namespace App\Http\Controllers;

use App\Models\Score;
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
    public function showScores()
    {
        // Ambil data skor siswa dari database
        $scores = Score::with('user')->get(); // Pastikan relasi 'user' sudah diatur di model Score

        // Return view dengan data skor
        return view('layouts.skorsiswa', compact('scores'));
    }
}
