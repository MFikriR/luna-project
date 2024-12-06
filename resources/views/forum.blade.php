<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning Forum</title>

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
            background: url('/img/forum-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .container {
            margin-top: 120px;
            max-width: 900px;
            background-color: var(--color-white-bg);
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Content Styling */
        .content h1 {
            color: var(--color-dark-teal);
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .forum-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .forum-list li {
            border: 1px solid var(--color-muted-blue);
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
            background-color: var(--color-light-blue);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .forum-list li:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .forum-list a {
            text-decoration: none;
            color: var(--color-dark-teal);
            font-size: 20px;
            font-weight: bold;
            display: block;
        }

        .forum-list .forum-description {
            color: black(--color-muted-blue);
            font-size: 16px;
            margin-top: 8px;
        }

        /* Navbar */
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

        .navbar .nav-link {
            color: white !important;
            margin-left: 10px;
        }

        .navbar .nav-link:hover {
            color: var(--color-sky-blue) !important;
        }
    </style>
</head>

<body>

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

    <div class="container">

        <!-- Konten -->
        <div class="content">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
