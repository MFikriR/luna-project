<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction and Self-Description</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        /* Custom Sidebar Styling */
        #sidebar {
            position: fixed;
            left: -250px; /* Sembunyikan sidebar di luar layar */
            top: 0;
            width: 250px;
            height: 100%;
            background-color: #DFF6FF;
            color: black;
            padding: 10px;
            transition: left 0.3s ease;
            z-index: 1000;
        }

        #sidebar.active {
            left: 0; /* Tampilkan sidebar ketika aktif */
        }

        #sidebar ul {
            list-style: none;
            padding: 0;
        }

        #sidebar ul li {
            padding: 15px;
        }

        #sidebar ul li a {
            color: black;
            text-decoration: none;
            display: block;
        }

        #sidebar ul li a:hover {
            background-color: #3c8bda;
            border-radius: 5px;
        }

        /* Styling for hamburger toggle inside sidebar */
        #sidebarToggle {
            position: absolute;
            top: 10px;
            right: -45px; /* Posisikan tepat di samping sidebar */
            border: none;
            color: black;
            padding: 10px;
            cursor: pointer;
            transition: right 0.3s ease;
            background-color: #DFF6FF;
            z-index: 1001;
        }

        #sidebarToggle.active {
            right: 10px; /* Geser tombol saat sidebar aktif */
        }

        #sidebarToggle:hover {
            background-color: #1abc9c;
        }

        /* Content Styling */
        .content {
            transition: margin-left 0.3s ease;
        }

        .content.active {
            margin-left: 250px;
        }

        /* Jumbotron & Card Styling */
        .jumbotron {
            background-color: #DFF6FF;
            border: 3px solid #1363DF;
            padding: 2rem;
            text-align:left;
            border-radius: 8px;
        }

        .btn-custom {
            background-color: #1363DF;
            color: white;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #1abc9c;
        }

        .card {
            border: 3px solid #1363DF;
            background-color: #DFF6FF;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #47B5FF">
    <!-- Sidebar -->
    <div id="sidebar">
        <button id="sidebarToggle" class="btn" aria-label="Toggle Sidebar">☰</button>
        <ul class="mt-4">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('drag-and-drop') }}">Drag and Drop</a></li>
            <li><a href="{{ route('latihan') }}">Latihan</a></li>
            <li><a href="{{ route('quiz') }}">Quiz</a></li>
            <li><a href="{{ route('video-tutorials') }}">Video Tutorials</a></li>
            <li><a href="{{ route('forum') }}">Forum</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container mt-4">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang User !</h1>
                <p class="lead">Mari belajar Bahasa Inggris Introduction and Self-description</p>
                <p>Untuk Kelas 7 SMP.</p>
            </div>
        </div>

        <!-- Card Section -->
        <div class="container mt-10">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Lesson 1">
                        <div class="card-body">
                            <h5 class="card-title">Materi Pembelajaran</h5>
                            <p class="card-text">Learn basic self-introduction phrases.</p>
                            <a href="#" class="btn btn-custom">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Lesson 2">
                        <div class="card-body">
                            <h5 class="card-title">Latihan Soal</h5>
                            <p class="card-text">Describe yourself and others.</p>
                            <a href="#" class="btn btn-custom">Start Practice</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Lesson 3">
                        <div class="card-body">
                            <h5 class="card-title">Video Pembelajaran</h5>
                            <p class="card-text">Practice through drag-and-drop exercises.</p>
                            <a href="#" class="btn btn-custom">Start Watch</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Lesson 4">
                        <div class="card-body">
                            <h5 class="card-title">Forum Pembelajaran</h5>
                            <p class="card-text">Discuss lessons with others.</p>
                            <a href="#" class="btn btn-custom">Join Forum</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Lesson 5">
                        <div class="card-body">
                            <h5 class="card-title">Quiz Pembelajaran</h5>
                            <p class="card-text">Test your knowledge with quizzes.</p>
                            <a href="#" class="btn btn-custom">Start Quiz</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Lesson 6">
                        <div class="card-body">
                            <h5 class="card-title">Profil Pengguna</h5>
                            <p class="card-text">View and edit your profile.</p>
                            <a href="#" class="btn btn-custom">Go to Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            var content = document.querySelector('.content');
            var toggleBtn = document.getElementById('sidebarToggle');

            sidebar.classList.toggle('active');
            content.classList.toggle('active');
            toggleBtn.classList.toggle('active');
        });
    </script>
</body>
</html>
