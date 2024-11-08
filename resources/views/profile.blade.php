@extends('layouts.main')

@section('title', 'Profile')
@section('content')
    <style>
        body {
            background-color: #47B5FF;
        }

        .container {
            max-width: 1000px; /* Perbesar lebar maksimal container */
            margin: 0 auto;
            background-color: white;
            padding: 77px; /* Perbesar padding */
            border-radius: 12px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #3498db;
            font-size: 36px; /* Perbesar ukuran teks header */
        }

        .profile-info {
            text-align: center;
        }

        .profile-info img {
            width: 200px; /* Perbesar ukuran gambar */
            height: 200px; /* Perbesar ukuran gambar */
            border-radius: 50%;
            margin-bottom: 30px; /* Perbesar margin bawah gambar */
        }

        .profile-info p {
            font-size: 22px; /* Perbesar ukuran teks deskripsi */
            color: #555;
            margin-bottom: 15px; /* Tambahkan jarak antar teks */
        }

        .profile-info strong {
            font-size: 24px; /* Perbesar ukuran teks tebal */
        }
    </style>

    <div class="container">
        <div class="content">
            <h1>Profil Pengguna</h1>
            <div class="profile-info">
                <!-- Menampilkan Foto Profil -->
                <img src="{{ asset('images/profiles/' . ($user->foto_profil ?? 'default.jpg')) }}" alt="Foto Profil" width="100">

                <!-- Menampilkan Nama -->
                <p><strong>Nama:</strong> {{ $user->name }}</p>

                <!-- Menampilkan Email -->
                <p><strong>Email:</strong> {{ $user->email }}</p>

                <!-- Menampilkan Tanggal Lahir -->
                <p><strong>Tanggal Lahir:</strong> {{ $user->tanggal_lahir }}</p>

                <!-- Menampilkan Jenis Kelamin -->
                <p><strong>Jenis Kelamin:</strong> {{ ucfirst($user->jenis_kelamin) }}</p>

                <!-- Menampilkan Tanggal Bergabung -->
                <p><strong>Member Since:</strong> {{ $user->created_at->format('d M Y') }}</p>
            </div>
        </div>
    </div>
@endsection
