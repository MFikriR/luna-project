<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Materi Pembelajaran')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-light p-3">
            <h4 class="text-center">Daftar Materi</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">Bab 1: Introduction</a></li>
                <li class="list-group-item"><a href="#">Bab 2: Self-Description</a></li>
                <li class="list-group-item"><a href="#">Bab 3: Daily Activities</a></li>
                <li class="list-group-item"><a href="#">Bab 4: Hobbies and Interests</a></li>
                <li class="list-group-item"><a href="#">Bab 5: Future Plans</a></li>
            </ul>
        </nav>

        <!-- Main content -->
        <div class="main-content w-100 p-4">
            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Materi Pembelajaran</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bab 1: Introduction</li>
                </ol>
            </nav>

            <!-- Content -->
            <h2>@yield('title', 'Bab 1: Introduction')</h2>
            <p>Materi pembelajaran tentang Introduction...</p>

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
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
