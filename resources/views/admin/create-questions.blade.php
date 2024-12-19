@extends('layouts.adminlayout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Tambah Pertanyaan Baru</h2>

    <!-- Tampilkan pesan error validasi -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Tambah Pertanyaan -->
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <textarea name="question" id="question" class="form-control" rows="3" required>{{ old('question') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="option_1" class="form-label">Opsi 1</label>
            <input type="text" name="option_1" id="option_1" class="form-control" value="{{ old('option_1') }}" required>
        </div>

        <div class="mb-3">
            <label for="option_2" class="form-label">Opsi 2</label>
            <input type="text" name="option_2" id="option_2" class="form-control" value="{{ old('option_2') }}" required>
        </div>

        <div class="mb-3">
            <label for="option_3" class="form-label">Opsi 3</label>
            <input type="text" name="option_3" id="option_3" class="form-control" value="{{ old('option_3') }}" required>
        </div>

        <div class="mb-3">
            <label for="option_4" class="form-label">Opsi 4</label>
            <input type="text" name="option_4" id="option_4" class="form-control" value="{{ old('option_4') }}" required>
        </div>

        <div class="mb-3">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select name="correct_answer" id="correct_answer" class="form-control" required>
                <option value="">-- Pilih Jawaban Benar --</option>
                <option value="A" {{ old('correct_answer') == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('correct_answer') == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ old('correct_answer') == 'C' ? 'selected' : '' }}>C</option>
                <option value="D" {{ old('correct_answer') == 'D' ? 'selected' : '' }}>D</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Pertanyaan</button>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
