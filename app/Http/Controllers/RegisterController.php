<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User sudah ada
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Log data yang diterima
        Log::info('Data yang diterima dari formulir:', $request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'tanggalLahir' => 'required|date',
            'jenisKelamin' => 'required|in:laki-laki,perempuan',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan foto profil
        $filename = 'default.jpg'; // default jika foto tidak diupload
        if ($request->hasFile('foto')) {
            $filename = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images/profiles'), $filename);  // Menyimpan di folder images/profiles
        }

        // Simpan user
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tanggal_lahir' => $request->tanggalLahir,
            'jenis_kelamin' => $request->jenisKelamin,
            'foto_profil' => $filename,
            'role' => 'siswa'
        ]);
        // Log untuk memastikan penyimpanan berhasil
        Log::info('User berhasil disimpan:', [
            'name' => $request->nama,
            'email' => $request->email,
        ]);


        // Redirect ke halaman login atau dashboard dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
