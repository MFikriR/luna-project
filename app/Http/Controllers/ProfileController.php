<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('profile', compact('user')); // Menampilkan view profile dengan data pengguna
    }
}
