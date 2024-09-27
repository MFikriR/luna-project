<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Tutorials</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            background-color: #47B5FF;
            font-family: Arial, sans-serif;
        }

        .container {
            padding: 20px;
            text-align: center;
        }

        .video-container {
            margin: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        iframe {
            width: 80%;
            height: 400px;
            border: none;
        }

        .video-title {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
        }

        /* Sidebar styles */
        #sidebar {
            position: fixed;
            left: -300px; /* Sembunyikan sidebar di luar layar sebelah kiri */
            top: 0;
            width: 250px;
            height: 100%;
            background-color: #DFF6FF;
            color: black;
            padding: 10px;
            transition: left 0.3s ease;
        }

        #sidebar.active {
            left: 0;
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
            transition: margin-left 0.3s ease, width 0.3s ease;
            margin-left: 0;
            width: 100%;
        }

        .content.active {
            margin-left: 250px; /* Geser konten ke kanan sebesar lebar sidebar */
            width: calc(100% - 250px); /* Sesuaikan lebar konten */
        }

        #sidebarToggle {
            position: fixed;
            left: 1px;
            top: 10px;
            border: none;
            color: black;
            padding: 10px;
            cursor: pointer;
            transition: left 0.3s ease;
            z-index: 1000;
        }

        #sidebarToggle.active {
            left: 238px;
        }

        #sidebarToggle:hover {
            background-color: #1abc9c;
        }

    </style>
</head>
<body>
    <div class="container">
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

        <!-- Konten -->
        <div class="content">
            <button id="sidebarToggle" aria-label="Toggle Sidebar">☰</button>
            <h1>Video Tutorials</h1>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/bPYQ6HzGh8k" allowfullscreen></iframe>
                <p class="video-title">Materi Introduction</p>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/koOql6CRAAI" allowfullscreen></iframe>
                <p class="video-title">Materi Self-introduction</p>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/VARKZpKPyvQ" allowfullscreen></iframe>
                <p class="video-title">Materi Introduction lainnya</p>
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