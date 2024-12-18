<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Pastikan view login ada di resources/views
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        // Cek login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user(); // Ambil user yang berhasil login
            session(['user' => $user]); // Menyimpan user di sesi
            return redirect()->intended('home')->with('success', 'Selamat datang!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }


    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Hapus sesi pengguna
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/login')->with('message', 'Anda telah berhasil logout.');
    }
}
// itu btambah
