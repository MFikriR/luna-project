@extends('layouts.materilayout')
@section('title', 'Evaluation')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box-quiz">
        @if(isset($user))
            <p>Welcome, {{ $user->name }}!</p>
        @else
            <p>You are not logged in.</p>
        @endif

        <h2 class="text-center mb-4">Evaluation</h2>
        <!-- Tambahan: Div untuk teks instruksi -->
        <div class="instruction-box p-3 mb-4 rounded shadow">
            <h4 class="text-center text-primary">Instruksi</h4>
            <p class="text-center mb-0">
                Setelah membaca materi, silakan jawab evaluasi di bawah ini dengan teliti.
                Pilih salah satu jawaban yang paling tepat untuk setiap pertanyaan.
            </p>
        </div>

        <form action="{{ route('quiz.submit') }}" method="POST">
            @csrf
            <div class="quiz-container">
                @foreach($questions as $question)
                    <div class="question-item mb-4 p-4 rounded shadow">
                        <h5 class="question-title mb-3">{{ $question->question }}</h5>

                        <div class="options">
                            <div class="form-check">
                                <input type="radio" name="answers[{{ $question->id }}]" value="A" id="optionA{{ $question->id }}" class="form-check-input" required>
                                <label class="form-check-label" for="optionA{{ $question->id }}">{{ $question->option_1 }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="answers[{{ $question->id }}]" value="B" id="optionB{{ $question->id }}" class="form-check-input">
                                <label class="form-check-label" for="optionB{{ $question->id }}">{{ $question->option_2 }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="answers[{{ $question->id }}]" value="C" id="optionC{{ $question->id }}" class="form-check-input">
                                <label class="form-check-label" for="optionC{{ $question->id }}">{{ $question->option_3 }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="answers[{{ $question->id }}]" value="D" id="optionD{{ $question->id }}" class="form-check-input">
                                <label class="form-check-label" for="optionD{{ $question->id }}">{{ $question->option_4 }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
