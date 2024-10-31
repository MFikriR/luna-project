@extends('layouts.main')

@section('title', 'Mini Games')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Pilih Mini Game</h1>
        <div class="row g-4">
            <!-- Card 1: Drag and Drop -->
            <div class="col-md-4">
                <div class="card card-game h-100">
                    <img src="{{ asset('img/drag.png') }}" class="card-img-top" alt="Drag and Drop Game">
                    <div class="card-body text-center">
                        <h5 class="card-title">Drag and Drop</h5>
                        <p class="card-text">Susun kalimat dengan cara drag and drop kata-kata.</p>
                        <a href="{{ route('drag-and-drop') }}" class="btn btn-primary">Mainkan</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Tebak Arti -->
            <div class="col-md-4">
                <div class="card card-game h-100">
                    <img src="{{ asset('img/tebak.png') }}" class="card-img-top" alt="Tebak Arti Game">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tebak Arti</h5>
                        <p class="card-text">Tebak arti dari kata atau kalimat yang diberikan.</p>
                        <a href="{{ route('tebak_arti_game') }}" class="btn btn-primary">Mainkan</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Percakapan -->
            <div class="col-md-4">
                <div class="card card-game h-100">
                    <img src="{{ asset('img/percakapan.png') }}" class="card-img-top" alt="Percakapan Game">
                    <div class="card-body text-center">
                        <h5 class="card-title">Percakapan</h5>
                        <p class="card-text">Simulasikan percakapan dalam berbagai situasi.</p>
                        <a href="{{ route('percakapan_game') }}" class="btn btn-primary">Mainkan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS for Hover Effect -->
    <style>
        .card-game {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-game:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection