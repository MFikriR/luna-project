@extends('layouts.adminlayout')

@section('content')
    <div class="container-dashboard">
        <h1 class="title">Dashboard Admin</h1>
        <div class="dashboard-stats">
            <div class="card">
                <h2>Total Siswa</h2>
                <p>120</p>
            </div>
            <div class="card">
                <h2>Total Materi</h2>
                <p>45</p>
            </div>
            <div class="card">
                <h2>Total Kuis</h2>
                <p>20</p>
            </div>
            <div class="card">
                <h2>Notifikasi Baru</h2>
                <p>5</p>
            </div>
        </div>
    </div>
@endsection
