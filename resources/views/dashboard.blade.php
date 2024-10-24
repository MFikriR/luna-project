@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang {{ Auth::user()->name ?? 'User' }}!</h1>
            <p class="lead">Mari belajar Bahasa Inggris Introduction and Self-description</p>
            <p>Untuk Kelas 11 SMA.</p>
        </div>
    </div>

    <!-- Content section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <a href="{{ route('materi') }}" style="text-decoration: none; color: inherit;">
                    <div class="card interactive-card">
                        <img src="{{ asset('img/buku.png') }}" alt="Lesson 1" style="width: 80%; height: auto; margin: auto; display: block;">
                        <div class="card-body">
                            <h3 class="card-title">Materi Pembelajaran</h3>
                            <p class="card-text">Learn basic self-introduction phrases.</p>
                            <button class="btn">Learn More</button>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col">
                <a href="{{ route('mini-games') }}" style="text-decoration: none; color: inherit;">
                    <div class="card interactive-card">
                        <img src="{{ asset('img/game.png') }}" alt="Lesson 2" style="width: 80%; height: auto; margin: auto; display: block;">
                        <div class="card-body">
                            <h3 class="card-title">Mini Games</h3>
                            <p class="card-text">Let's play and learn.</p>
                            <button class="btn">Start Game!</button>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col">
                <a href="{{ route('video-tutorials') }}" style="text-decoration: none; color: inherit;">
                    <div class="card interactive-card">
                        <img src="{{ asset('img/video.png') }}" alt="Lesson 3" style="width: 80%; height: auto; margin: auto; display: block;">
                        <div class="card-body">
                            <h3 class="card-title">Video Pembelajaran</h3>
                            <p class="card-text">Let's learn with video.</p>
                            <button class="btn">Start Watch</button>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>

@endsection

<!-- Custom CSS -->
<style>
    /* Gaya untuk card interaktif */
    .interactive-card {
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    /* Efek hover */
    .interactive-card:hover {
        transform: scale(1.05); /* Membuat card sedikit lebih besar */
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Memberikan bayangan saat di-hover */
    }
</style>
