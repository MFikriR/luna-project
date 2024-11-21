<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Pembelajaran Bahasa Inggris Kelas XI</title>
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
            width: 120px; /* Ukuran gambar lebih besar */
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .button span {
            font-size: 18px; /* Ukuran teks */
            font-family: 'Poppins', sans-serif;
            color: black
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        footer {
            margin-top: 50px;
            font-size: 14px;
            color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h1>Media Pembelajaran Bahasa Inggris Kelas XI</h1>

    <div class="button-container">
        <button class="button">
            <img src="/gif/books.gif" alt="KI/KD">
            <span>KI/KD</span>
        </button>
        <button class="button">
            <img src="/gif/book.gif" alt="Materi">
            <span>Materi</span>
        </button>
        <button class="button">
            <img src="/gif/open-book (1).gif" alt="Informasi">
            <span>Informasi</span>
        </button>
    </div>

    <footer>
        &copy; 2023 Media Pembelajaran. Semua hak dilindungi.
    </footer>

</body>
</html>
