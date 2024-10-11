<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction and Self-Description</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        .jumbotron {
            padding: 30px;
            text-align:left ;
            border-radius: 8px;
            margin-top: 50px; /* Adjust this value if needed */
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
            text-align: center;
        }

        /* Styling for Auth buttons (Masuk and Daftar) */
        .auth-buttons {
            position: absolute;
            top: 14px;
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
            background-color: white;
            border-radius: 5px;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        /* Footer styles */
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 9px;
            text-align: center;
            margin-top: 50px;
            position: relative;
            bottom: -10px;
            width: 100%;
            margin-left: -10px;
        }

        .footer a {
            color: #1abc9c;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body style="background-color: #47B5FF">

    <div class="content">
        <div class="auth-buttons">
            <nav class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Materi</a></li>
                    <li><a href="#">Tentang</a></li>
                </ul>
            </nav>

            <a href="{{ route('login') }}" class="btn-masuk">Masuk</a>
            <a href="{{ route('register') }}" class="btn-daftar">Daftar</a>
        </div>
        

        <div class="container mt-4">
            <div class="jumbotron">
                <h1 class="display-4">Ayo Belajar Materi</h1>
                <h1 class="display-4">Bahasa Inggris</h1>
                <h1 class="display-4">Introduction and self-description</h1>
            </div>
        </div>

        <!-- Content section -->
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <img src="https://images.template.net/wp-content/uploads/2022/11/Self-Introduction.jpg" alt="Lesson 1">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Kucing Team. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>
</body>
</html>