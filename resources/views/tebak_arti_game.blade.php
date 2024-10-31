<!-- resources/views/tebak_arti_game.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebak Arti Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">
    <h1 class="text-center mb-4">Tebak Arti Kata</h1>

    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <p>Terjemahkan kata Inggris berikut:</p>
    <h2>{{ ucfirst($englishWord) }}</h2>

    <form action="{{ route('tebak_arti_game.check') }}" method="POST">
        @csrf
        <input type="hidden" name="english_word" value="{{ $englishWord }}">
        <div class="mb-3">
            <label for="answer" class="form-label">Jawaban Anda:</label>
            <input type="text" class="form-control" id="answer" name="answer" required>
        </div>
        <button type="submit" class="btn btn-primary">Cek Jawaban</button>
    </form>
</body>
</html>
