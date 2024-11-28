<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #CCE1EB; /* Warna latar belakang utama */
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
        }

        .left-side {
            background-color: #54868B; /* Warna latar kiri */
            color: white;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            padding: 30px;
            text-align: center;
        }

        .left-side h1 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .left-side p {
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .right-side {
            padding: 40px;
            text-align: center;
        }

        .right-side h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #54868B;
        }

        .form-control {
            border-radius: 15px;
            background-color: #D3E3EB;
        }

        .btn-primary {
            background-color: #54868B;
            border: none;
            border-radius: 15px;
            font-size: 1rem;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #97C5D3;
        }

        a {
            color: #54868B;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100 shadow rounded-4 overflow-hidden">
            <!-- Left Side -->
            <div class="col-md-6 left-side">
                <h1>Pembelajaran Bahasa Inggris</h1>
                <p>Bahasa Inggris SMA Kelas XI</p>
                <img src="{{ asset('img/orang belajar.png') }}" alt="Ilustrasi" class="img-fluid" style="max-width: 80%;">
            </div>

            <!-- Right Side -->
            <div class="col-md-6 right-side bg-white">
                <h2>Login Siswa</h2>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="studentEmail" class="form-label">Email Siswa</label>
                        <input type="email" class="form-control" id="studentEmail" name="email" placeholder="Masukkan email siswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="studentPassword" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="studentPassword" name="password" placeholder="Masukkan password" required>
                            <span class="input-group-text toggle-password" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login Siswa</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
