<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Games</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .card-game {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-game:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pilih Mini Game</h1>
        <div class="row g-4">
            <!-- Card 1: Drag and Drop -->
            <div class="col-md-4">
                <div class="card card-game h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Drag and Drop Game">
                    <div class="card-body text-center">
                        <h5 class="card-title">Drag and Drop</h5>
                        <p class="card-text">Susun kalimat dengan cara drag and drop kata-kata.</p>
                        <a href="{{ route('drag_and_drop_game') }}" class="btn btn-primary">Mainkan</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Tebak Arti -->
            <div class="col-md-4">
                <div class="card card-game h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Tebak Arti Game">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tebak Arti</h5>
                        <p class="card-text">Tebak arti dari kata atau kalimat yang diberikan.</p>
                        <a href="{{ route('tebak_arti_game') }}" class="btn btn-primary">Mainkan</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Percakapan -->
            <div class="col-md-4">
                <div class="card card-game h-100">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Percakapan Game">
                    <div class="card-body text-center">
                        <h5 class="card-title">Percakapan</h5>
                        <p class="card-text">Simulasikan percakapan dalam berbagai situasi.</p>
                        <a href="{{ route('percakapan_game') }}" class="btn btn-primary">Mainkan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
