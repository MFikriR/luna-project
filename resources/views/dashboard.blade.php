<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction and Self-Description</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        #sidebar {
            position: fixed;
            left: -300px; /* Sembunyikan sidebar di luar layar sebelah kiri */
            top: 0;
            width: 250px;
            height: 100%;
            background-color: #DFF6FF;
            color: black;
            padding: 10px;
            transition: left 0.3s ease; /* Gunakan properti 'left' untuk transisi */
        }

        #sidebar.active {
            left: 0; /* Tampilkan sidebar dengan mengatur 'left' ke 0 */
            z-index: 1000;
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
            background-color: #34495e;
            border-radius: 5px;
        }

        /* Content styles */
        .content {
            margin-left: 0;
            transition: margin-left 0.3s ease; /* Gunakan 'margin-left' untuk transisi */
        }

        .content.active {
            margin-left: 250px; /* Geser konten ke kanan sebesar lebar sidebar */
        }


        #sidebarToggle {
            position: fixed;
            left: 1px;
            top: 10px;
            border: none;
            color: black;
            padding: 10px;
            cursor: pointer;
            transition: left 0.3s ease; /* Tambahkan transisi agar tombol bergerak halus */
            z-index: 1000; /* Ensure it stays on top of content */
        }

        #sidebarToggle.active {
            left: 238px; /* Geser tombol sesuai lebar sidebar */
        }


        #sidebarToggle:hover {
            background-color: #1abc9c;
        }

        /* Main content styles */
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .jumbotron {
            background-color: #DFF6FF;
            border: 3px solid #1363DF;
            padding: 30px;
            text-align:left ;
            border-radius: 8px;
            /* margin-top: 10px; Adjust this value if needed */
            padding: 2rem;
        }

        .jumbotron h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #1363DF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            padding: 0.75rem 1.5rem;
        }

        .btn:hover {
            background-color: #1abc9c;
        }

        /* Cards */
        .card {
            border: 3px solid #1363DF;
            background-color: #DFF6FF;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100%;
            border-radius: 5px;
        }

        .card-title {
            font-size: 24px;
            margin: 15px 0;
        }

        .card-text {
            font-size: 16px;
            color: #555;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .col {
            flex: 1;
        }

        /* Styling for Auth buttons (Masuk and Daftar) */
        .auth-buttons {
            position: absolute;
            top: 10px;
            right: 20px;
            z-index: 1001;
        }

        .auth-buttons a {
            text-decoration: none;
            padding: 10px 15px;
            color: black;
            border-radius: 5px;
            margin-left: 10px;
            font-size: 14px;
        }

        .btn-masuk {
            color: black;
            background-color: white;
        }

        .btn-daftar {
            background-color: #1abc9c;
        }

        .auth-buttons a:hover {
            opacity: 0.8;
        }

        /* Styling for navbar */
        .navbar {
            display: inline-block;
            margin-right: 20px;
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 15px;
        }

        .navbar ul li {
            display: inline;
        }

        .navbar ul li a {
            text-decoration: none;
            color: black;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .navbar ul li a:hover {
            background-color: #1abc9c;
        }


    </style>
</head>
<body style="background-color: #47B5FF">

    <!-- Sidebar -->
    <div id="sidebar">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('drag-and-drop') }}">Drag and Drop</a></li>
            <li><a href="{{ route('latihan') }}">Latihan</a></li>
            <li><a href="{{ route('quiz') }}">Quiz</a></li>
            <li><a href="{{ route('video-tutorials') }}">Video Tutorials</a></li>
            <li><a href="{{ route('forum') }}">Forum</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
        </ul>
    </div>

    <div class="content">
        <button id="sidebarToggle" aria-label="Toggle Sidebar">☰</button>

        <div class="container mt-4">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang User !</h1>
                <p class="lead">Mari belajar Bahasa Inggris Introduction and Self-description</p>
                <p>Untuk Kelas 7 SMP.</p>
            </div>
        </div>

        <!-- Content section -->
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Lesson 1">
                        <div class="card-body">
                            <h3 class="card-title">Materi Pembelajaran</h3>
                            <p class="card-text">Learn basic self-introduction phrases.</p>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Lesson 2">
                        <div class="card-body">
                            <h3 class="card-title">Latihan Soal</h3>
                            <p class="card-text">Describe yourself and others.</p>
                            <a href="#" class="btn">Start Practice</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Lesson 3">
                        <div class="card-body">
                            <h3 class="card-title">Video Pembelajaran</h3>
                            <p class="card-text">Practice through drag-and-drop exercises.</p>
                            <a href="#" class="btn">Start Watch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Lesson 1">
                        <div class="card-body">
                            <h3 class="card-title">Forum Pembelajaran</h3>
                            <p class="card-text">Learn basic self-introduction phrases.</p>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Lesson 2">
                        <div class="card-body">
                            <h3 class="card-title">Quiz Pembelajaran</h3>
                            <p class="card-text">Describe yourself and others.</p>
                            <a href="#" class="btn">Start Practice</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Lesson 3">
                        <div class="card-body">
                            <h3 class="card-title">Profil pengguna</h3>
                            <p class="card-text">Practice through drag-and-drop exercises.</p>
                            <a href="#" class="btn">Start Watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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