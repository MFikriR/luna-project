@extends('layouts.main')

@section('title', 'Profile')
@section('content')
    <style>
        body {
            background-color: #47B5FF;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .profile-info {
            text-align: center;
        }

        .profile-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-info p {
            font-size: 18px;
            color: #555;
        }
    </style>

    <div class="container">
        <div class="content">
            <h1>Profil Pengguna</h1>
            <div class="profile-info">
                <!-- Menampilkan Foto Profil -->
                <img src="{{ asset('images/profiles/' . $user->foto_profil) }}" alt="Foto Profil">

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
