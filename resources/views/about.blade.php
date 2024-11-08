<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Flexbox untuk memastikan footer berada di bawah */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* Hero section */
        .hero {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #333;
            padding: 50px 0;
            flex: 1; /* Membuat hero section memenuhi ruang yang tersedia */
        }

        /* Navbar link */
        .navbar-nav .nav-link {
            margin-right: 15px;
            padding: 8px 15px;
            color: #000;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* Footer style */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
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
                    <li class="nav-item">
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
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="hero">
        <div class="container mt-5">
            <h1 class="text-center mb-4">About Us</h1>
            <p class="text-muted text-center">
                Kami adalah mahasiswa dari Program Studi Pendidikan Komputer angkatan 2022 di Universitas Lambung Mangkurat, Fakultas Keguruan dan Ilmu Pendidikan. Saat ini, kami sedang mengerjakan tugas pembuatan website pembelajaran bahasa Inggris sebagai bagian dari mata kuliah kami. Kami berharap platform ini dapat membantu siswa dalam mempelajari bahasa Inggris dengan cara yang interaktif dan menyenangkan.
            </p>
            <p class="text-muted text-center">Welcome to our English learning platform! We provide engaging mini-games and interactive materials to help students learn English with ease. Explore our drag-and-drop games, vocabulary challenges, and conversation simulations.</p>
            <p class="text-muted text-center">We are committed to making English learning fun and accessible for everyone. Thank you for choosing us as your learning partner!</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Kucing Team. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
