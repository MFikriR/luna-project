@extends('layouts.materilayout')
@section('title', 'Hasil Kuis')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Hasil Kuis</h2>

    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <h3>Halo, {{ Auth::user()->name }}!</h3>
    <p>Skor Anda: {{ $score->score }} / {{ $questions->count() }}</p>
    <p>Jumlah percobaan: {{ $score->attempts }} dari maksimal 2 percobaan.</p>

    @if($score->is_final)
        <p class="text-danger">Nilai ini sudah final dan tidak dapat diulang lagi.</p>
    @else
        <p class="text-success">Anda masih memiliki kesempatan untuk mengulangi kuis jika diperlukan.</p>
    @endif

    <a href="{{ route('quiz.start') }}" class="btn btn-primary mt-4">Ulangi Kuis</a>
</div>

@endsection
