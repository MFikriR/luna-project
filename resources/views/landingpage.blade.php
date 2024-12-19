<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Pembelajaran Bahasa Inggris</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
       body {
        font-family: 'Open Sans', sans-serif; /* Font utama */
       }

        .hero {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #333;
            padding: 50px 0;
        }
        .hero img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .hero .hero-text {
            display: flex;
            align-items: center;
        }
        .hero .hero-text h1 {
            font-size: 2.5rem;
        }
        .btn-primary {
            background-color: #2196f3;
            border-color: #2196f3;
        }
        .btn-primary:hover {
            background-color: #1976d2;
            border-color: #1976d2;
        }
        .navbar-nav .nav-link {
            color: #000;
            font-weight: 700;
            font-style: italic;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .py-5 {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #333;
            padding: 50px 0;
        }

        .navbar-nav .nav-link {
            margin-right: 15px; /* Tambahkan jarak antar item navbar */
            padding: 8px 15px; /* Sesuaikan padding untuk membuat jarak di dalam item */
            color: #000;
        }

        

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Learn English for 11th Grade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lihatMateri') }}">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#capaian">Capaian Pembelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ route('register') }}">Register</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-text">
                    <div>
                        <h1 class="mb-4">Selamat Datang di Website </h1>
                        <h1 class="mb-4">Learn English for 11th Grade</h1>
                        <p class="lead">Platform pembelajaran Bahasa Inggris interaktif untuk kalangan siswa. Mulailah belajar dengan materi yang menarik dan mudah dipahami.</p>
                        <a href="#introduction" class="btn btn-primary btn-lg mt-3">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/gambar bicara.png') }}" alt="Karakter Animasi Belajar Bahasa Inggris">
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section id="introduction" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!-- Gambar Introduction -->
                    <img src="{{ asset('img/Learning languages-bro.png') }}" alt="Introduction Image" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-lg-6">
                    <h2>Ayo Belajar Bahasa Inggris</h2>
                    <p class="mb-4">Introduction and Self Description. Kami menyediakan materi yang lengkap dan interaktif untuk membantu Anda menguasai Bahasa Inggris lebih cepat dan menyenangkan.</p>
                    <a href="#login" class="btn btn-primary btn-lg">Ayo Mulai Belajar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Materi Section -->
    <section id="materi" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Materi Pembelajaran</h2>
                <p>Berikut adalah materi yang kami tawarkan untuk meningkatkan kemampuan bahasa Anda:</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-book-fill display-4 text-primary mb-3"></i>
                            <h4 class="card-title">Grammar</h4>
                            <p class="card-text">Belajar tata bahasa dengan interaktif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-journal-text display-4 text-success mb-3"></i>
                            <h4 class="card-title">Vocabulary</h4>
                            <p class="card-text">Perluas kosa kata Anda melalui latihan yang menyenangkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-headphones display-4 text-warning mb-3"></i>
                            <h4 class="card-title">Listening</h4>
                            <p class="card-text">Kemampuan mendengarkan dengan berbagai topik dan tingkat kesulitan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-mic-fill display-4 text-danger mb-3"></i>
                            <h4 class="card-title">Speaking</h4>
                            <p class="card-text">Praktik berbicara dengan bantuan video dan latihan interaktif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-book-half display-4 text-info mb-3"></i>
                            <h4 class="card-title">Reading</h4>
                            <p class="card-text">Tingkatkan pemahaman Anda melalui teks bacaan yang menarik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-pencil-square display-4 text-secondary mb-3"></i>
                            <h4 class="card-title">Writing</h4>
                            <p class="card-text">Latih keterampilan menulis Anda dengan esai dan artikel pendek.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Kucing Team. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
