<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $siswas = User::all(); // Ambil semua siswa
        return view('admin.daftar-siswa', compact('siswas'));
    }

    public function edit($id)
    {
        $siswa = User::findOrFail($id); // Ambil siswa berdasarkan ID
        return view('admin.edit-siswa', compact('siswa')); // Kirim data siswa ke view
    }

    // Fungsi untuk mengupdate data siswa
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'foto_profil' => 'nullable|image|max:2048',
        ]);

        // Ambil data siswa berdasarkan ID
        $siswa = User::findOrFail($id);

        // Update data siswa
        $siswa->name = $request->input('name');
        $siswa->email = $request->input('email');
        $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $siswa->jenis_kelamin = $request->input('jenis_kelamin');
        $siswa->role = $request->input('role');

        if ($request->hasFile('foto_profil')) {
            $filePath = $request->file('foto_profil')->store('profile_pictures', 'public');
            $siswa->foto_profil = $filePath;
        }

        $siswa->save();

        // Redirect atau kembalikan respons sesuai kebutuhan
        return redirect()->route('admin.daftar-siswa')->with('success', 'Data siswa berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Cari pengguna berdasarkan ID
        $siswa = User::findOrFail($id);

        // Hapus pengguna
        $siswa->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.daftar-siswa')->with('success', 'Siswa berhasil dihapus!');
    }

}
