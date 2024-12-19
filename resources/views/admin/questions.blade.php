@extends('layouts.adminlayout')

@section('content')
    <div class="container-fluid mt-5">
        <h2 class="mb-4">Daftar Soal Evaluasi</h2>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Tombol Tambah Pertanyaan -->
        <div class="mb-3">
            <a href="{{ route('questions.create') }}" class="btn btn-primary">
                <i class='bx bx-plus-circle'></i> Tambah Pertanyaan
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pertanyaan</th>
                    <th>Opsi 1</th>
                    <th>Opsi 2</th>
                    <th>Opsi 3</th>
                    <th>Opsi 4</th>
                    <th>Jawaban Benar</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->option_1 }}</td>
                        <td>{{ $question->option_2 }}</td>
                        <td>{{ $question->option_3 }}</td>
                        <td>{{ $question->option_4 }}</td>
                        <td>{{ $question->correct_answer }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm">
                                <i class='bx bx-edit'></i> Edit
                            </a>
                            <br><br>
                            <!-- Tombol Hapus -->
                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pertanyaan ini?')">
                                    <i class='bx bx-trash'></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
