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
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mini Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forum</a>
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
        <div class="scrollable-box mt-3" id="content-box">
            <h1>Kompetensi Inti dan Dasar</h1>
            <ul>
                <li>Mengidentifikasi jenis teks deskripsi.</li>
                <li>Menggunakan struktur teks secara efektif.</li>
                <li>Menerapkan kebahasaan dalam teks.</li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore culpa sapiente deleniti, quos ex impedit. Libero, temporibus necessitatibus eius, dolorum consequuntur exercitationem atque eos quisquam ea animi officia, distinctio nihil!
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam tempore fuga recusandae ipsam, quidem natus officiis cupiditate autem, dolorum a doloremque ut non ad id nobis aliquam temporibus? Necessitatibus, ipsam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit porro aliquam incidunt, dolorum nisi minus, omnis accusantium dolore beatae ullam, nulla totam repellendus necessitatibus ipsa doloremque voluptatum quia laboriosam pariatur?
            </p>
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
                    <li>Mengidentifikasi jenis teks deskripsi.</li>
                    <li>Menggunakan struktur teks secara efektif.</li>
                    <li>Menerapkan kebahasaan dalam teks.</li>
                </ul>
            `,
            peta_konsep: `
                <h1>Peta Konsep</h1>
                <p>Peta konsep adalah alat bantu untuk memahami keterkaitan antara berbagai kompetensi dan materi pembelajaran.</p>
                <ul>
                    <li>Pengertian Teks</li>
                    <li>Struktur dan Ciri Kebahasaan</li>
                    <li>Contoh Implementasi</li>
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
