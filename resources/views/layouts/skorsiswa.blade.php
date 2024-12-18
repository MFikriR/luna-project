@extends('layouts.adminlayout') {{-- Ganti dengan layout admin Anda --}}
@section('title', 'Daftar Skor Siswa')

@section('content')
    <div class="container-fluid mt-5"> {{-- Ubah container menjadi container-fluid untuk lebar penuh --}}
        <h2 class="text-primary mb-4 text-center">Daftar Skor Siswa</h2>

        <div class="table-responsive" style="max-width: 90%; margin: 0 auto;"> {{-- Maksimalkan lebar tabel --}}
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Email</th>
                        <th>Skor</th>
                        <th>Jumlah Percobaan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($scores as $index => $score)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $score->user->name }}</td>
                            <td>{{ $score->user->email }}</td>
                            <td>{{ $score->score }}%</td>
                            <td>{{ $score->attempts }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data skor siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .container-fluid {
        padding-left: 50px;
        padding-right: 50px;
    }

    .table thead th {
        background-color: #343a40;
        color: white;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>
