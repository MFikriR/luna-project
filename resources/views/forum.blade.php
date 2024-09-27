<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning Forum: Introduction and Self-Description</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #47B5FF;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        .container.active {
            margin-left: 270px;
            width: calc(100% - 250px);
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .forum-list {
            list-style: none;
            padding: 0;
        }

        .forum-list li {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .forum-list li:last-child {
            border-bottom: none;
        }

        .forum-list li a {
            text-decoration: none;
            font-size: 18px;
            color: #3498db;
        }

        .forum-list li a:hover {
            color: #2980b9;
        }

        .forum-description {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
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
            margin-left: 0px;
            width: 100%;
        }

        .content.active {
            margin-left: 0px; /* Geser konten ke kanan sebesar lebar sidebar */
            width: calc(100% - 0px); /* Sesuaikan lebar konten */
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

            <h1>English Learning Forum: Introduction and Self-Description</h1>
            <ul class="forum-list">
                @foreach ($topics as $topic)
                <li>
                    <a href="#">{{ $topic['title'] }}</a>
                    <p class="forum-description">{{ $topic['description'] }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            var content = document.querySelector('.content');
            var container = document.querySelector('.container');
            var toggleBtn = document.getElementById('sidebarToggle');

            sidebar.classList.toggle('active');
            content.classList.toggle('active');
            container.classList.toggle('active');
            toggleBtn.classList.toggle('active');
        });
    </script>
</body>
</html>