@extends('layouts.materilayout')
@section('title', 'Hasil Evaluasi')
@section('content')

<div id="scroll-box" class="scroll-box-quiz">
    <div class="card shadow-lg p-5">
        <h2 class="text-center text-primary mb-4">Hasil Evaluasi</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <div class="profile-icon mb-4">
                                <img src="{{ asset('images/profiles/' . ($user->foto_profil ?? 'default.jpg')) }}" alt="User Profile" class="rounded-circle shadow">
                            </div>
                            <h4 class="text-dark mb-2">Nama Siswa:</h4>
                            <p class="text-muted"><strong>{{ $user->name }}</strong></p>

                            <div class="mt-3 w-100">
                                <div class="card shadow-sm border-0 mb-3 bg-light">
                                    <div class="card-body text-center">
                                        <h5 class="text-secondary mb-1">Total Skor Anda:</h5>
                                        <h2 class="text-success">{{ $score->score }}%</h2>
                                    </div>
                                </div>

                                <div class="card shadow-sm border-0 bg-light">
                                    <div class="card-body text-center">
                                        <h5 class="text-secondary mb-1">Jumlah Soal:</h5>
                                        <h2 class="text-primary">{{ $totalQuestions }}</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                @if ($score->attempts < 3)
                                    <a href="{{ route('quiz.retry') }}" class="btn btn-outline-primary btn-lg">Retry Quiz</a>
                                @else
                                    <button class="btn btn-secondary btn-lg" disabled>Retry Not Available</button>
                                    <p class="text-muted mt-2">Anda telah mencapai batas maksimal percobaan.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-icon img {
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    .card {
        border-radius: 15px;
    }

    .btn-outline-primary {
        border-width: 2px;
    }

    .text-primary {
        font-weight: bold;
    }
</style>

@endsection
