<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>

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

        /* Content Styling */
        .content-container {
            margin: 120px auto;
            width: 100%;
            max-width: 1000px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: var(--color-dark-teal);
        }

        p {
            text-align: justify;
            color: #333;
        }

        /* Footer Styling */
        footer {
            background-color: var(--color-dark-teal);
            color: white;
            padding: 10px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
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
    <div class="content-container">
        <h1 class="text-center">About Us</h1>
        <p>
            Kami adalah mahasiswa dari Program Studi Pendidikan Komputer angkatan 2022 di Universitas Lambung Mangkurat, Fakultas Keguruan dan Ilmu Pendidikan. Saat ini, kami sedang mengerjakan tugas pembuatan website pembelajaran bahasa Inggris sebagai bagian dari mata kuliah kami.
        </p>
        <p>
            Kami berharap platform ini dapat membantu siswa dalam mempelajari bahasa Inggris dengan cara yang interaktif dan menyenangkan. Platform kami menyediakan berbagai permainan interaktif, seperti game drag-and-drop, tantangan kosakata, dan simulasi percakapan.
        </p>
        <p>
            Komitmen kami adalah menciptakan pengalaman belajar bahasa Inggris yang menyenangkan dan mudah diakses oleh semua orang. Terima kasih telah memilih kami sebagai mitra belajar Anda!
        </p>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2024 Kucing Team. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
