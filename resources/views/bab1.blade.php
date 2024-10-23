<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bab 1: Introduction')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        /* Custom styling */
        body {
            font-family: 'Arial', sans-serif;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #f8f9fa;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .breadcrumb, .img-container {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="p-3">
            <h4 class="text-center">Daftar Materi</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('bab1') }}">Bab 1: Introduction</a></li>
                <li class="list-group-item"><a href="{{ route('bab2') }}">Bab 2: Self-Description</a></li>
                <li class="list-group-item"><a href="{{ route('bab3') }}">Bab 3: Daily Activities</a></li>
                <li class="list-group-item"><a href="{{ route('bab4') }}">Bab 4: Hobbies and Interests</a></li>
                <li class="list-group-item"><a href="{{ route('bab5') }}">Bab 5: Future Plans</a></li>
            </ul>
        </nav>

        <!-- Main content -->
        <div class="main-content w-100 p-4">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Materi Pembelajaran</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bab 1: Offers & Suggestions</li>
                </ol>
            </nav>

            <!-- Content -->
            <h2>Bab 1: Offers & Suggestions</h2>
            <h4>A: Pre-Activity</h4>
            <h5>Conversation 1</h5>
            <p>With a partner, read the conversation given below.</p>

            <!-- Gambar Conversation 1 -->
            <div class="img-container">
                <img src="{{ asset('img/bab1.png') }}" alt="Gambar Pre-Activity">
            </div>

            <h5>Conversation 2</h5>
            <p>With a partner, read the conversation given below.</p>

            <!-- Gambar Conversation 2 -->
            <div class="img-container">
                <img src="{{ asset('img/bab1_2.png') }}" alt="Gambar Pre-Activity">
            </div>

            <h4>B: Building-Blocks</h4>
            <h5>Suggesting and Offering</h5>

            <!-- Gambar Suggesting and Offering -->
            <div class="img-container">
                <img src="{{ asset('img/bab1_3.png') }}" alt="Gambar Suggesting and Offering">
            </div>

            <!-- Latihan Soal -->
            <div class="mt-5">
                <h3>Latihan Soal</h3>
                <p>1. What is your name?</p>
                <input type="text" class="form-control" placeholder="Answer here">

                <p>2. Where do you live?</p>
                <input type="text" class="form-control" placeholder="Answer here">

                <!-- Submit Button -->
                <button class="btn btn-primary mt-3">Submit</button>
            </div>

            <!-- Next button -->
            <div class="text-end mt-4">
                <a href="{{ route('bab2') }}" class="btn btn-primary">Next</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
