<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #47B5FF;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        .container.active {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .profile-info {
            text-align: center;
        }

        .profile-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-info p {
            font-size: 18px;
            color: #555;
        }

        /* Sidebar styles */
        #sidebar {
            position: fixed;
            left: -300px;
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
            margin-left: 0px;
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
                <li><a href="#">Forum</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
            </ul>
        </div>

        <div class="content">
            <button id="sidebarToggle" aria-label="Toggle Sidebar">☰</button>

            <h1>Profil Pengguna</h1>
            <div class="profile-info">
                <img src="https://via.placeholder.com/150" alt="Foto Profil">
                <p><strong>Nama:</strong></p>  {{--{{ $user->name }} --}}
                <p><strong>Email:</strong> </p> {{--{{ $user->email }} --}}
                <p><strong>Member Since:</strong> </p> {{-- {{ $user->created_at->format('d M Y') }} --}}
            </div>
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
