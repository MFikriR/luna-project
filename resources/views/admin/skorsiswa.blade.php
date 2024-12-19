@extends('layouts.adminlayout')

@section('content')
<div class="container-fluid mt-5">
    <h2 class="mb-4">Daftar Skor Siswa</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Skor</th>
                <th>Percobaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scores as $score)
            <tr>
                <td>{{ $score->user->name ?? 'Nama tidak ditemukan' }}</td> <!-- Nama siswa -->
                <td>{{ $score->score }}</td> <!-- Skor -->
                <td>{{ $score->attempts }}</td> <!-- Percobaan -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
