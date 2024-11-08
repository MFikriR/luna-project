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

    // Method untuk menampilkan halaman tambah siswa
    public function create()
    {
        return view('admin.tambah-siswa');
    }

    // Method untuk menyimpan data siswa ke database
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);


        // Simpan data siswa ke database
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->tanggal_lahir = $validatedData['tanggal_lahir'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];
        $user->role = 'siswa';

        // Cek apakah ada file foto profil yang diunggah
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/profiles'), $fileName);
            $user->foto_profil = $fileName;
        } else {
            $user->foto_profil = 'default.png'; // Atur default jika tidak ada foto yang diupload
        }

        $user->save();

        return redirect()->route('admin.daftar-siswa')->with('success', 'Siswa berhasil ditambahkan!');
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
