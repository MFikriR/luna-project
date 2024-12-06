<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Games</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Root Colors */
        :root {
            --color-light-blue: #D3E3EB;
            --color-sky-blue: #97C5D3;
            --color-muted-blue: #B4C8C8;
            --color-dark-teal: #54868B;
            --color-pastel-blue: #CCE1EB;
            --color-primary: #007bff;
        }

        /* Page Background */
        body {
            background: url('/img/edu.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: var(--color-primary);
            color: white;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar .navbar-brand {
            color: white;
            font-size: 24px;
        }

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: var(--color-pastel-blue) !important;
        }

        /* Card Styling */
        .card-game {
            border: 1px solid var(--color-muted-blue);
            border-radius: 8px;
            background-color: var(--color-light-blue);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-game:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-title {
            color: var(--color-dark-teal);
            font-weight: bold;
        }

        .card-text {
            color: black(--color-muted-blue);
            font-size: 14px;
        }

        .btn-primary {
            background-color: var(--color-dark-teal);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--color-sky-blue);
            color: black;
        }

        /* Tambahkan margin-top untuk konten agar tidak tertutup navbar */
        .content-container {
            margin-top: 80px; /* Sesuaikan nilainya dengan tinggi navbar */
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mini-games') }}">Mini Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('forum') }}">Forum</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <div class="content-container">
            <h1 class="text-center mb-4">Pilih Mini Game</h1>
            <div class="row g-4">
                <!-- Card 1: Drag and Drop -->
                <div class="col-md-4">
                    <div class="card card-game h-100">
                        <img src="/img/drag.png" class="card-img-top" alt="Drag and Drop Game">
                        <div class="card-body text-center">
                            <h5 class="card-title">Drag and Drop</h5>
                            <p class="card-text">Susun kalimat dengan cara drag and drop kata-kata.</p>
                            <a href="#" class="btn btn-primary">Mainkan</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Tebak Arti -->
                <div class="col-md-4">
                    <div class="card card-game h-100">
                        <img src="/img/tebak.png" class="card-img-top" alt="Tebak Arti Game">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tebak Arti</h5>
                            <p class="card-text">Tebak arti dari kata atau kalimat yang diberikan.</p>
                            <a href="#" class="btn btn-primary">Mainkan</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Percakapan -->
                <div class="col-md-4">
                    <div class="card card-game h-100">
                        <img src="/img/percakapan.png" class="card-img-top" alt="Percakapan Game">
                        <div class="card-body text-center">
                            <h5 class="card-title">Percakapan</h5>
                            <p class="card-text">Simulasikan percakapan dalam berbagai situasi.</p>
                            <a href="#" class="btn btn-primary">Mainkan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
