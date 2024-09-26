<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Jika user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan informasi user dalam session (sederhana)
            session(['user' => $user]);

            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }
}
