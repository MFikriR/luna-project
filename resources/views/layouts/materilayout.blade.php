<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Container untuk sidebar dan konten */
        .container-main {
            display: flex;
            height: 100vh;
            flex-direction: row;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #007bff; /* Navbar berwarna biru */
            padding: 10px 20px;
            color: white;
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

        .navbar-toggler-icon {
            background-color: white;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: white; /* Sidebar berwarna putih */
            padding-top: 20px;
            position: fixed;
            top: 60px; /* Menyesuaikan dengan navbar */
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
            z-index: 999;
            border-right: 2px solid #ddd; /* Garis pemisah pada sidebar */
        }

        .sidebar.hidden {
            width: 0;
            overflow: hidden;
        }

        .sidebar .nav-link {
            color: #343a40;
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .nav-link:hover {
            background-color: #007bff; /* Hover berwarna biru */
            color: white;
        }

        /* Main Content dan Navbar */
        .main-content {
            flex-grow: 1;
            margin-left: 250px;
            margin-top: 60px; /* Memberi jarak antara navbar dan konten */
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .main-content.collapsed {
            margin-left: 0;
        }

        /* Media Queries untuk responsif */
        @media (max-width: 767px) {
            .sidebar {
                width: 0;
                position: absolute;
                z-index: 999;
            }

            .sidebar.active {
                width: 250px;
            }

            .main-content {
                margin-left: 0;
            }
        }

        /* Teks "Materi Pembelajaran" di atas sidebar */
        .materi-title {
            font-size: 20px;
            color: #343a40;
            font-weight: bold;
            margin-bottom: 20px;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container-main">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Materi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a> <!-- Link Home -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="materi-title">Materi Pembelajaran</div>
            <div class="nav flex-column">
                <a href="#" class="nav-link"><i class="fas fa-book"></i> Chapter 1</a>
                <a href="#" class="nav-link"><i class="fas fa-folder-open"></i> Chapter 2</a>
                <a href="#" class="nav-link"><i class="fas fa-tasks"></i> Chapter 3</a>
                <a href="#" class="nav-link"><i class="fas fa-users"></i> Chapter 4</a>
                <a href="#" class="nav-link"><i class="fas fa-user"></i> Chapter 5</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <div class="content-area">
                <h1>Selamat Datang di Dashboard Materi</h1>
                <p>Konten utama akan ditampilkan di sini.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.querySelector('.navbar-toggler');

        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('active');
        });
    </script>
</body>

</html>
