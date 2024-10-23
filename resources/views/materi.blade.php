<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Materi Pembelajaran')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        /* Custom styling */
        body {
            font-family: 'Arial', sans-serif;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
        }
        .card {
            width: 18rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card img {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi Pembelajaran</li>
            </ol>
        </nav>

        <!-- Content -->
        <h2 class="text-center mb-4">@yield('title', 'Pilih Materi')</h2>

        <!-- Card Container -->
        <div class="card-container">
            <!-- Card Bab 1 -->
            <div class="card">
                <img src="{{ asset('img/bab1.png') }}" class="card-img-top" alt="Gambar Bab 1">
                <div class="card-body">
                    <h5 class="card-title">Bab 1: Introduction</h5>
                    <p class="card-text">Pelajari dasar-dasar pengenalan diri dalam Bahasa Inggris.</p>
                    <a href="{{ route('bab1') }}" class="btn btn-primary">Pilih Bab 1</a>
                </div>
            </div>

            <!-- Card Bab 2 -->
            <div class="card">
                <img src="{{ asset('img/bab2.png') }}" class="card-img-top" alt="Gambar Bab 2">
                <div class="card-body">
                    <h5 class="card-title">Bab 2: Self-Description</h5>
                    <p class="card-text">Pelajari cara mendeskripsikan diri sendiri dalam Bahasa Inggris.</p>
                    <a href="{{ route('bab2') }}" class="btn btn-primary">Pilih Bab 2</a>
                </div>
            </div>

            <!-- Card Bab 3 -->
            <div class="card">
                <img src="{{ asset('img/bab3.png') }}" class="card-img-top" alt="Gambar Bab 3">
                <div class="card-body">
                    <h5 class="card-title">Bab 3: Daily Activities</h5>
                    <p class="card-text">Pelajari bagaimana mendeskripsikan kegiatan sehari-hari.</p>
                    <a href="{{ route('bab3') }}" class="btn btn-primary">Pilih Bab 3</a>
                </div>
            </div>

            <!-- Card Bab 4 -->
            <div class="card">
                <img src="{{ asset('img/bab4.png') }}" class="card-img-top" alt="Gambar Bab 4">
                <div class="card-body">
                    <h5 class="card-title">Bab 4: Hobbies and Interests</h5>
                    <p class="card-text">Pelajari bagaimana menyebutkan hobi dan minatmu.</p>
                    <a href="{{ route('bab4') }}" class="btn btn-primary">Pilih Bab 4</a>
                </div>
            </div>

            <!-- Card Bab 5 -->
            <div class="card">
                <img src="{{ asset('img/bab5.png') }}" class="card-img-top" alt="Gambar Bab 5">
                <div class="card-body">
                    <h5 class="card-title">Bab 5: Future Plans</h5>
                    <p class="card-text">Pelajari bagaimana menyebutkan rencana masa depanmu.</p>
                    <a href="{{ route('bab5') }}" class="btn btn-primary">Pilih Bab 5</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
