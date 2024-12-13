@extends('layouts.gameslayout')
@section('title', 'Tebak Arti')
@section('content')
<style>
    body {
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        width: 100%;
    }

    h1 {
        font-size: 32px;
        margin-bottom: 20px;
        color: #007bff;
        font-weight: 700;
    }

    .card {
        margin-bottom: 15px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .card label {
        font-weight: 600;
        color: #343a40;
    }

    .form-control {
        font-size: 16px;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: 600;
        padding: 12px 20px;
        border-radius: 8px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .feedback {
        margin-top: 30px;
        padding: 20px;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .feedback h5 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .feedback .correct {
        color: green;
        font-weight: bold;
    }

    .feedback .incorrect {
        color: red;
        font-weight: bold;
    }

    .alert-info {
        font-size: 16px;
        font-weight: 600;
        background-color: #d1ecf1;
        color: #0c5460;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }
</style>

<div class="container">
    <h1 class="text-center mb-4">Tebak Arti Kata</h1>

    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('tebak_arti_game.check') }}" method="POST">
        @csrf
        <div class="mb-3">
            <p>Terjemahkan kata-kata berikut:</p>
            @foreach($wordsToGuess as $word => $translation)
                <div class="card">
                    <label for="answer{{ $word }}" class="form-label"><strong>{{ ucfirst($word) }}</strong></label>
                    <input type="text" class="form-control" id="answer{{ $word }}" name="answers[{{ $word }}]" required>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Cek Jawaban</button>
    </form>

    <!-- Feedback -->
    @if(session('feedback'))
        <div class="feedback">
            <h5>Hasil:</h5>
            <ul>
                @foreach(session('feedback') as $item)
                    <li>
                        <strong>{{ ucfirst($item['word']) }}:</strong>
                        @if($item['status'] == 'benar')
                            <span class="correct">Benar!</span>
                        @else
                            <span class="incorrect">Salah! Jawaban yang benar: {{ $item['correct_answer'] }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

@endsection
