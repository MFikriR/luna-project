<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KI & KD</title>

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
            background: url('/img/edu.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styling */
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

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: var(--color-pastel-blue) !important;
        }

        /* Content Styling */
        .content-container {
            margin: 120px auto;
            /* Adjust for navbar space */
            width: 100%;
            max-width: 1000px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Button Styling */
        .btn-toggle {
            margin: 10px 5px;
            padding: 15px 25px;
            font-size: 25px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            width: 270px;
            height: 60px;
        }

        .btn-toggle.active {
            background-color: var(--color-primary);
            color: white;
        }

        .btn-toggle:hover {
            background-color: var(--color-sky-blue);
            color: black;
        }

        /* Scrollable Box */
        .scrollable-box {
            max-height: 400px;
            overflow-y: auto;
            padding: 20px;
            border: 1px solid var(--color-muted-blue);
            border-radius: 5px;
            background-color: var(--color-light-blue);
            font-size: 16px;
            line-height: 1.8;
        }

        /* Justify Content for Lists */
        ul {
            text-align: justify;
        }

        ul li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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

    <!-- Content Container -->
    <div class="content-container text-center">
        <!-- Buttons -->
        <button class="btn-toggle active" id="btn-ki-kd">KI & KD</button>
        <button class="btn-toggle" id="btn-peta-konsep">Peta Konsep</button>

        <!-- Scrollable Box -->
        <!-- Scrollable Box -->
    <div class="scrollable-box mt-3" id="content-box">
        <h1>Kompetensi Inti dan Dasar</h1>
        <ul>
            <li>3.1 Menerapkan fungsi sosial, struktur teks, dan unsur kebahasaan teks interaksi transaksional lisan dan tulis yang melibatkan tindakan memberi dan meminta informasi terkait Suggetion & Offers, sesuai dengan konteks penggunaannya. (Perhatikan unsur kebahasaan should, can.)</li>
            <li>4.1 Menyusun teks interaksi transaksional, lisan dan tulis, pendek dan sederhana, yang melibatkan tindakan memberi dan meminta informasi terkait Suggetion & Offers, dengan memperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan yang benar dan sesuai dengan konteks.</li>
            <li>3.2 Menerapkan fungsi sosial, struktur teks, dan unsur kebahasaan teks interaksi transaksional lisan dan tulis yang melibatkan tindakan memberi dan meminta informasi terkait Opinions & Thoughts, sesuai dengan konteks penggunaannya. (Perhatikan unsur kebahasaan I think, I suppose, in my opinion.)</li>
            <li>4.2 Menyusun teks interaksi transaksional, lisan dan tulis, pendek dan sederhana, yang melibatkan tindakan memberi dan meminta informasi terkait Opinions & Thoughts, dengan memperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan yang benar dan sesuai konteks.</li>
            <li>Membedakan fungsi sosial, struktur teks, dan unsur kebahasaan beberapa teks khusus dalam bentuk Invitation dengan memberi dan meminta informasi terkait kegiatan sekolah/tempat kerja sesuai dengan konteks penggunaannya.</li>
            <li>4.3 Teks Invitation:</li>
            <ul>
                <li>4.3.1 Menangkap makna secara kontekstual terkait fungsi sosial, struktur teks, dan unsur kebahasaan teks khusus dalam bentuk Invitation lisan dan tulis, terkait kegiatan sekolah/tempat kerja.</li>
                <li>4.3.2 Menyusun teks khusus dalam bentuk Invitation lisan dan tulis, terkait kegiatan sekolah/tempat kerja, dengan memperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan, secara benar dan sesuai konteks.</li>
            </ul>
        </ul>
    </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript for Dynamic Content
        const btnKiKd = document.getElementById('btn-ki-kd');
        const btnPetaKonsep = document.getElementById('btn-peta-konsep');
        const contentBox = document.getElementById('content-box');

        // Content Data
        const contentData = {
            ki_kd: `
                <h1>Kompetensi Inti dan Dasar</h1>
                    <ul>
                        <li>3.1 Menerapkan fungsi sosial, struktur teks, dan unsur kebahasaan teks interaksi transaksional lisan dan tulis yang melibatkan tindakan memberi dan meminta informasi terkait Suggetion & Offers, sesuai dengan konteks penggunaannya. (Perhatikan unsur kebahasaan should, can.)</li>
                        <li>4.1 Menyusun teks interaksi transaksional, lisan dan tulis, pendek dan sederhana, yang melibatkan tindakan memberi dan meminta informasi terkait Suggetion & Offers, dengan memperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan yang benar dan sesuai dengan konteks.</li>
                        <li>3.2 Menerapkan fungsi sosial, struktur teks, dan unsur kebahasaan teks interaksi transaksional lisan dan tulis yang melibatkan tindakan memberi dan meminta informasi terkait Opinions & Thoughts, sesuai dengan konteks penggunaannya. (Perhatikan unsur kebahasaan I think, I suppose, in my opinion.)</li>
                        <li>4.2 Menyusun teks interaksi transaksional, lisan dan tulis, pendek dan sederhana, yang melibatkan tindakan memberi dan meminta informasi terkait Opinions & Thoughts, dengan memperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan yang benar dan sesuai konteks.</li>
                        <li>Membedakan fungsi sosial, struktur teks, dan unsur kebahasaan beberapa teks khusus dalam bentuk Invitation dengan memberi dan meminta informasi terkait kegiatan sekolah/tempat kerja sesuai dengan konteks penggunaannya.</li>
                        <li>4.3 Teks Invitation:</li>
                        <ul>
                            <li>4.3.1 Menangkap makna secara kontekstual terkait fungsi sosial, struktur teks, dan unsur kebahasaan teks khusus dalam bentuk Invitation lisan dan tulis, terkait kegiatan sekolah/tempat kerja.</li>
                            <li>4.3.2 Menyusun teks khusus dalam bentuk Invitation lisan dan tulis, terkait kegiatan sekolah/tempat kerja, dengan memperhatikan fungsi sosial, struktur teks, dan unsur kebahasaan, secara benar dan sesuai konteks.</li>
                        </ul>
                    </ul>
            `,
            peta_konsep: `
                <h1>Peta Konsep</h1>
                <p>Peta konsep ini membantu memahami keterkaitan antara berbagai kompetensi dan materi pembelajaran dalam topik interaksi transaksional, seperti memberi dan meminta informasi terkait saran, tawaran, pendapat, dan undangan.</p>
                <ul>
                    <li><strong>Suggetion & Offers:</strong>
                        <ul>
                            <li>Fungsi Sosial: Memberikan Suggetion & Offers dalam konteks interaksi sosial.</li>
                            <li>Struktur Teks: Penggunaan ungkapan seperti "Should", "Can", dan "Would" dalam Suggetion & Offers.</li>
                            <li>Kebahasaan: Memahami cara mengungkapkan Suggetion & Offers secara tepat dan sopan.</li>
                        </ul>
                    </li>
                    <li><strong>Opinions & Thoughts:</strong>
                        <ul>
                            <li>Fungsi Sosial: Memberikan pendapat atau pikiran dalam diskusi atau percakapan.</li>
                            <li>Struktur Teks: Ungkapan seperti "I think", "I suppose", "In my opinion".</li>
                            <li>Kebahasaan: Cara menyampaikan pendapat dengan sopan dan jelas.</li>
                        </ul>
                    </li>
                    <li><strong>Invitation:</strong>
                        <ul>
                            <li>Fungsi Sosial: Memberikan undangan terkait kegiatan formal atau acara tertentu.</li>
                            <li>Struktur Teks: Format dan elemen penting dalam Invitation, seperti waktu, tempat, dan tujuan.</li>
                            <li>Kebahasaan: Bahasa yang digunakan dalam Invitation, seperti ungkapan "We cordially invite", "Please join us", dll.</li>
                        </ul>
                    </li>
                </ul>
            `
        };

        // Button Click Event Handlers
        btnKiKd.addEventListener('click', () => {
            btnKiKd.classList.add('active');
            btnPetaKonsep.classList.remove('active');
            contentBox.innerHTML = contentData.ki_kd;
        });

        btnPetaKonsep.addEventListener('click', () => {
            btnPetaKonsep.classList.add('active');
            btnKiKd.classList.remove('active');
            contentBox.innerHTML = contentData.peta_konsep;
        });
    </script>
</body>

</html>
