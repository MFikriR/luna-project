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
                <img src="{{ asset('img/chapter1.png') }}" class="card-img-top" alt="Gambar Bab 1">
                <div class="card-body">
                    <h5 class="card-title">Bab 1: Offers & Suggestions</h5>
                    <p class="card-text">Pelajari cara memberikan penawaran dan saran dalam Bahasa Inggris.</p>
                    <a href="{{ route('bab1') }}" class="btn btn-primary">Pilih Bab 1</a>
                </div>
            </div>

            <!-- Card Bab 2 -->
            <div class="card">
                <img src="{{ asset('img/chapter2.png') }}" class="card-img-top" alt="Gambar Bab 2">
                <div class="card-body">
                    <h5 class="card-title">Bab 2: Opinions & Thoughts</h5>
                    <p class="card-text">Pelajari cara mengungkapkan pendapat dan pemikiran dalam Bahasa Inggris.</p>
                    <a href="{{ route('bab2') }}" class="btn btn-primary">Pilih Bab 2</a>
                </div>
            </div>

            <!-- Card Bab 3 -->
            <div class="card">
                <img src="{{ asset('img/chapter3.png') }}" class="card-img-top" alt="Gambar Bab 3">
                <div class="card-body">
                    <h5 class="card-title">Bab 3: Party Time</h5>
                    <p class="card-text">Pelajari ungkapan-ungkapan yang digunakan saat mengadakan atau menghadiri pesta.</p>
                    <a href="{{ route('bab3') }}" class="btn btn-primary">Pilih Bab 3</a>
                </div>
            </div>

            <!-- Card Bab 4 -->
            <div class="card">
                <img src="{{ asset('img/chapter4.png') }}" class="card-img-top" alt="Gambar Bab 4">
                <div class="card-body">
                    <h5 class="card-title">Bab 4: National Disaster - An Exposition</h5>
                    <p class="card-text">Pelajari tentang bencana alam nasional dan cara menyajikan eksposisi terkait topik ini.</p>
                    <a href="{{ route('bab4') }}" class="btn btn-primary">Pilih Bab 4</a>
                </div>
            </div>

            <!-- Card Bab 5 -->
            <div class="card">
                <img src="{{ asset('img/chapter5.png') }}" class="card-img-top" alt="Gambar Bab 5">
                <div class="card-body">
                    <h5 class="card-title">Bab 5: Letter Writing</h5>
                    <p class="card-text">Pelajari cara menulis surat dalam berbagai konteks resmi dan tidak resmi.</p>
                    <a href="{{ route('bab5') }}" class="btn btn-primary">Pilih Bab 5</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
