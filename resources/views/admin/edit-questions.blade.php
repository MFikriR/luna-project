@extends('layouts.adminlayout')

@section('content')
<div class="container-fluid mt-5">
    <h2 class="mb-4">Edit Pertanyaan</h2>
    <form action="{{ route('questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $question->question }}" required>
        </div>
        <div class="mb-3">
            <label for="option_1" class="form-label">Opsi 1</label>
            <input type="text" class="form-control" id="option_1" name="option_1" value="{{ $question->option_1 }}" required>
        </div>
        <div class="mb-3">
            <label for="option_2" class="form-label">Opsi 2</label>
            <input type="text" class="form-control" id="option_2" name="option_2" value="{{ $question->option_2 }}" required>
        </div>
        <div class="mb-3">
            <label for="option_3" class="form-label">Opsi 3</label>
            <input type="text" class="form-control" id="option_3" name="option_3" value="{{ $question->option_3 }}" required>
        </div>
        <div class="mb-3">
            <label for="option_4" class="form-label">Opsi 4</label>
            <input type="text" class="form-control" id="option_4" name="option_4" value="{{ $question->option_4 }}" required>
        </div>
        <div class="mb-3">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select name="correct_answer" id="correct_answer" class="form-control" required>
                <option value="A" {{ $question->correct_answer == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ $question->correct_answer == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ $question->correct_answer == 'C' ? 'selected' : '' }}>C</option>
                <option value="D" {{ $question->correct_answer == 'D' ? 'selected' : '' }}>D</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
