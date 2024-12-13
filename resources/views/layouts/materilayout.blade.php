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
            background-color: #d3e3eb;
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
            padding: 5px 20px;
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
            margin-top: 40px; /* Memberi jarak antara navbar dan konten */
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

        .example-box {
            background-color: #e0e0e0;
            border-left: 6px solid #4CAF50;
            padding: 15px;
            margin: 20px 0;
        }
        .example-box code {
            font-family: monospace;
            background-color: #e0e0e0;
            padding: 2px 5px;
        }
        .btn-next {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
        }
        .btn-next:hover {
            background-color: #45a049;
            color: white;
        }
        .breadcrumb {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }
        .chat-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .chat-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            flex-grow: 1;
            margin: 0 20px;
        }
        .chat-row {
            display: flex;
            align-items: flex-start;
        }
        .chat-bubble {
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 60%;
            position: relative;
            font-size: 16px;
        }
        .left {
            background-color: #d9edf7;
            margin-right: auto;
            display: flex;
            align-items: center;
        }
        .right {
            background-color: #fce5cd;
            margin-left: auto;
            display: flex;
            align-items: center;
        }
        .left-bubble {
            order: 1;
        }
        .right-bubble {
            order: 0;
        }
        /* Left triangle (A's bubble) */
        .chat-bubble.left::before {
            content: "";
            position: absolute;
            left: -10px;
            top: 15px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent #d9edf7 transparent transparent;
        }
        /* Right triangle (B's bubble) */
        .chat-bubble.right::before {
            content: "";
            position: absolute;
            right: -10px;
            top: 15px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent transparent transparent #fce5cd;
        }
       /* Image styling with increased size */
        .person-left, .person-right {
            width: 150px; /* Ganti ukuran sesuai kebutuhan */
            height: auto;
        }

        /* Label */
        .scroll-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        /* Kotak dengan scroll */
        .scroll-box {
            background-color: #ffffff; /* Warna latar putih */
            border: 1px solid #ccc; /* Garis tepi */
            padding: 5px; /* Padding di dalam kotak */
            height: 500px; /* Tinggi tetap */
            overflow-y: auto; /* Tambahkan scroll secara vertikal */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan untuk tampilan */
        }

        /* Gaya untuk pagination */
        .pagination {
            display: flex;
            gap: 10px; /* Jarak antar tombol */
            justify-content: center; /* Letakkan pagination di tengah */
            align-items: center;
            margin-top: 8px; /* Memberi jarak dari konten atas */
            padding: 0px;
            background-color: #fff; /* Warna latar belakang pagination */
            border-radius: 12px; /* Rounded border untuk seluruh pagination */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan untuk tampilan */
            border: 1px solid #ddd; /* Tambahkan border */
        }

        /* Gaya untuk tombol */
        .pagination .btn {
            display: inline-block;
            padding: 3px 20px; /* Ukuran tombol */
            background-color: #007bff; /* Warna background */
            color: #fff; /* Warna teks */
            text-decoration: none; /* Hilangkan garis bawah */
            border-radius: 6px; /* Rounded border tombol */
            font-size: 14px; /* Ukuran font */
            font-weight: 500; /* Tebal font */
            text-align: center;
            transition: all 0.3s ease; /* Animasi hover */
            border: 1px solid #0056b3; /* Warna border */
        }

        /* Efek hover pada tombol */
        .pagination .btn:hover {
            background-color: #0056b3; /* Warna saat hover */
            color: #fff; /* Warna teks saat hover */
            transform: scale(1.05); /* Efek zoom sedikit */
        }

        /* Tombol aktif */
        .pagination .btn.active {
            background-color: #0056b3; /* Warna khusus tombol aktif */
            color: white;
            pointer-events: none; /* Nonaktifkan klik */
            border: 1px solid #003e7f;
        }

        /* Tombol tambahan: Back dan Next */
        .pagination .btn-back, .pagination .btn-next {
            font-weight: bold;
            font-size: 12px;
            background-color: #6c757d; /* Warna tombol tambahan */
            border: 1px solid #5a6268; /* Warna border tombol tambahan */
        }

        .pagination .btn-back:hover, .pagination .btn-next:hover {
            background-color: #5a6268; /* Warna saat hover tombol tambahan */
        }

        html {
            scroll-behavior: smooth;
        }

        .chevron-icon {
        transition: transform 0.3s ease;
        }

        .chevron-icon.rotate {
            transform: rotate(180deg);
        }

        .building-blocks {
            background-color: #fff8dc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .types-of-invitations {
            /* display: flex; */
            /* justify-content: space-between; */
            align-items: center;
            margin-bottom: 20px;
        }

        .types-of-invitations .badge {
            background-color: #ffc107;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .formal-invitation,
        .common-format {
            background-color: #e8f4fc;
            border-left: 5px solid #007bff;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        ul {
            margin-left: 20px;
        }

        .rounded-img {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        img {
        max-width: 100%;
        height: auto;
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
                            <a class="nav-link active" href="{{route('home')}}">Home</a> <!-- Link Home -->
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('mini-games') }}">Mini Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('forum') }}">Forum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="materi-title">Materi Pembelajaran</div>
            <div class="nav flex-column">

                <!-- Chapter 1 with dropdown -->
                <div class="nav-item">
                    <a href="#" class="nav-link d-flex justify-content-between align-items-center toggle-icon"
                    data-bs-toggle="collapse" data-bs-target="#chapter1Content" aria-expanded="false">
                        <span><i class="fas fa-book"></i> Chapter 1</span>
                        <i class="fas fa-chevron-down chevron-icon"></i>
                    </a>
                    <div class="collapse" id="chapter1Content">
                        <div class="nav flex-column ms-3">
                            <a href="{{ route('bab1.page', ['page' => 1]) }}" class="nav-link">Suggestions</a>
                            <a href="{{ route('bab1.page', ['page' => 2]) }}#offers" class="nav-link">Offers</a>
                        </div>
                    </div>
                </div>

                <!-- Chapter 2 -->
                <div class="nav-item">
                    <a href="#" class="nav-link d-flex justify-content-between align-items-center toggle-icon"
                    data-bs-toggle="collapse" data-bs-target="#chapter2Content" aria-expanded="false">
                        <span><i class="fas fa-book"></i> Chapter 2</span>
                        <i class="fas fa-chevron-down chevron-icon"></i>
                    </a>
                    <div class="collapse" id="chapter2Content">
                        <div class="nav flex-column ms-3">
                            <a href="{{ route('bab2.page', ['page' => 1]) }}" class="nav-link">Opinions</a>
                        </div>
                    </div>
                </div>

                <!-- Chapter 3 -->
                <div class="nav-item">
                    <a href="#" class="nav-link d-flex justify-content-between align-items-center toggle-icon"
                    data-bs-toggle="collapse" data-bs-target="#chapter3Content" aria-expanded="false">
                        <span><i class="fas fa-book"></i> Chapter 3</span>
                        <i class="fas fa-chevron-down chevron-icon"></i>
                    </a>
                    <div class="collapse" id="chapter3Content">
                        <div class="nav flex-column ms-3">
                            <a href="{{ route('bab3.page', ['page' => 1]) }}" class="nav-link">Party Time</a>
                        </div>
                    </div>
                </div>

                <!-- Evaluasi -->
                <div class="nav-item">
                    <a href="{{ route('quiz.evaluation') }}" class="nav-link d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-book"></i> Evaluasi</span>
                    </a>
                </div>

            </div>
        </div>


        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <div class="content-area">
                @yield('content') <!-- Tempat konten halaman child -->
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.querySelector('.navbar-toggler');

    // Toggle sidebar
    toggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
    });

    // Add event listeners for dropdown collapse
    document.querySelectorAll('.toggle-icon').forEach(toggle => {
        const targetId = toggle.getAttribute('data-bs-target');
        const target = document.querySelector(targetId);

        // Event saat dropdown dibuka
        target.addEventListener('shown.bs.collapse', function () {
            const chevron = toggle.querySelector('.chevron-icon');
            chevron.classList.add('rotate');
        });

        // Event saat dropdown ditutup
        target.addEventListener('hidden.bs.collapse', function () {
            const chevron = toggle.querySelector('.chevron-icon');
            chevron.classList.remove('rotate');
        });
    });
    </script>


</body>

</html>
