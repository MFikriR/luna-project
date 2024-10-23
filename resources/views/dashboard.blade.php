@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang {{ Auth::user()->name ?? 'User' }}!</h1>
            <p class="lead">Mari belajar Bahasa Inggris Introduction and Self-description</p>
            <p>Untuk Kelas 7 SMP/MTs.</p>
        </div>
    </div>

    <!-- Content section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card interactive-card" onclick="window.location.href='#'">
                    <img src="{{ asset('img/buku.png') }}" alt="Lesson 1" style="width: 80%; height: auto; margin: auto; display: block;">
                    <div class="card-body">
                        <h3 class="card-title">Materi Pembelajaran</h3>
                        <p class="card-text">Learn basic self-introduction phrases.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card interactive-card" onclick="window.location.href='#'">
                    <img src="{{ asset('img/game.png') }}" alt="Lesson 2" style="width: 80%; height: auto; margin: auto; display: block;">
                    <div class="card-body">
                        <h3 class="card-title">Mini Games</h3>
                        <p class="card-text">Lets play and Learning.</p>
                        <a href="#" class="btn">Start Game!</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card interactive-card" onclick="window.location.href='#'">
                    <img src="{{ asset('img/video.png') }}" alt="Lesson 3" style="width: 80%; height: auto; margin: auto; display: block;">
                    <div class="card-body">
                        <h3 class="card-title">Video Pembelajaran</h3>
                        <p class="card-text">Lets learning with video.</p>
                        <a href="#" class="btn">Start Watch</a>
                    </div>
                </div>
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
