<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Pembelajaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        .custom-card {
            width: 200px; /* Atur lebar card sesuai kebutuhan */
            height: 300px; /* Atur tinggi card sesuai kebutuhan */
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Media Pembelajaran</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Deskripsi Umum -->
    <section class="container mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-4">Materi Pembelajaran Bahasa Inggris</h1>
            <p class="lead">Di halaman ini, Anda dapat mengakses berbagai materi pembelajaran interaktif yang dirancang untuk membantu Anda memahami topik-topik dalam bahasa Inggris, dari perkenalan diri hingga hobi dan minat.</p>
        </div>
    </section>

    <!-- Daftar Materi / Topik -->
    <section class="container mt-4">
        <h2 class="mb-4">Topik: Introduction</h2>
        <div class="row">
            <!-- Materi 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Greetings and Introductions">
                    <div class="card-body">
                        <h5 class="card-title">Greetings and Introductions</h5>
                        <p class="card-text">Pelajari cara menyapa dan memperkenalkan diri dalam bahasa Inggris.</p>
                        <a href="#" class="btn btn-primary">Buka Materi</a>
                    </div>
                </div>
            </div>

            <!-- Materi 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Personal Information">
                    <div class="card-body">
                        <h5 class="card-title">Personal Information</h5>
                        <p class="card-text">Berlatih menyampaikan informasi pribadi, seperti nama, umur, dan hobi.</p>
                        <a href="#" class="btn btn-primary">Buka Materi</a>
                    </div>
                </div>
            </div>

            <!-- Materi 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Family and Friends">
                    <div class="card-body">
                        <h5 class="card-title">Family and Friends</h5>
                        <p class="card-text">Pelajari cara berbicara tentang keluarga dan teman-teman dalam bahasa Inggris.</p>
                        <a href="#" class="btn btn-primary">Buka Materi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Materi 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Describing People">
                    <div class="card-body">
                        <h5 class="card-title">Describing People</h5>
                        <p class="card-text">Pelajari cara mendeskripsikan penampilan dan karakteristik orang lain dalam bahasa Inggris.</p>
                        <a href="#" class="btn btn-primary">Buka Materi</a>
                    </div>
                </div>
            </div>

            <!-- Materi 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Hobbies and Interests">
                    <div class="card-body">
                        <h5 class="card-title">Hobbies and Interests</h5>
                        <p class="card-text">Berbicara tentang hobi dan minat pribadi dalam bahasa Inggris.</p>
                        <a href="#" class="btn btn-primary">Buka Materi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action -->
    <section class="container mt-4">
        <div class="alert alert-info text-center">
            Untuk mengakses materi lengkap dan latihan soal, silakan <a href="#" class="alert-link">Login</a> atau <a href="#" class="alert-link">Register</a>.
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
