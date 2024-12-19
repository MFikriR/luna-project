<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Games</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #8ECAE6;
            background-image: url('/img/edu.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }

        h1 {
            margin-top: 50px;
            font-size: 36px;
            color: white;
            font-family: 'Poppins', sans-serif;
            text-shadow: 2px 4px 6px rgba(0, 0, 0, 0.4);
            background: rgba(0, 0, 0, 0.6);
            padding: 10px 20px;
            display: inline-block;
            border-radius: 10px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 40px; /* Jarak antar tombol */
            margin: 100px 0 50px; /* Jarak ke bawah dan atas */
            flex-wrap: wrap;
        }

        .button {
            padding: 20px;
            font-size: 20px; /* Ukuran teks lebih besar */
            cursor: pointer;
            border: none;
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 220px; /* Lebar tombol lebih besar */
            height: 250px; /* Tinggi tombol lebih besar */
            background-color: white;
            position: relative;
        }

        .button img {
            width: 180px; /* Ukuran gambar lebih besar */
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .button span {
            font-size: 18px; /* Ukuran teks */
            font-family: 'Poppins', sans-serif;
            color: black;
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background-color: #ffffff;
            color: #8ECAE6;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            font-size: 24px;
            transition: all 0.3s ease;
        }

        .home-button:hover {
            background-color: #219EBC;
            color: white;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transform: scale(1.1);
        }

        footer {
            margin-top: 50px;
            font-size: 14px;
            color: #f1f1f1;
        }
    </style>
</head>
<body>

    <!-- Tombol Home -->
    <a href="{{ route('home') }}" class="home-button" title="Kembali ke Home">
        <i class="fas fa-home"></i>
    </a>

    <h1>Mini Games</h1>

    <div class="button-container">
        <!-- Drag and Drop Game Button -->
        <button class="button" onclick="window.location.href='{{ route('drag-and-drop') }}'">
            <img src="/img/DragnDrop3.gif" alt="Drag and Drop">
            <span>Drag and Drop</span>
        </button>
        <!-- Tebak Arti Game Button -->
        <button class="button" onclick="window.location.href='{{ route('tebak_arti_game') }}'">
            <img src="/img/tebak.png" alt="Tebak Arti">
            <span>Tebak Arti</span>
        </button>
        <!-- Percakapan Game Button -->
        <button class="button" onclick="window.location.href='{{ route('percakapan_game') }}'">
            <img src="/img/percakapan.png" alt="Percakapan">
            <span>Percakapan</span>
        </button>
    </div>

    <footer>
        &copy; 2023 Media Pembelajaran. Semua hak dilindungi.
    </footer>

</body>
</html>
