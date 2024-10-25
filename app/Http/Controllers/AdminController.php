<?php

namespace App\Http\Controllers;

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
}

