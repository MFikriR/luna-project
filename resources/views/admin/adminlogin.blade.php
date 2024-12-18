<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #CCE1EB; /* Warna latar belakang utama */
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 100px auto; /* Menjaga form berada di tengah halaman */
        }

        .right-side {
            padding: 40px;
            text-align: center;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            <!-- Right Side -->
            <div class="col-md-12 right-side">
                <h2>Login Admin</h2>
                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="adminEmail" class="form-label">Email Admin</label>
                        <input type="email" class="form-control" id="adminEmail" name="email" placeholder="Masukkan email admin" required>
                    </div>
                    <div class="mb-3">
                        <label for="adminPassword" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Masukkan password" required>
                            <span class="input-group-text toggle-password" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login Admin</button>
                </form>
                <!-- Menampilkan pesan error jika ada -->
                @if ($errors->has('error'))
                    <div class="alert alert-danger">
                        {{ $errors->first('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Menambahkan fungsi untuk toggle password
        const togglePassword = document.querySelector("#togglePassword");
        const passwordField = document.querySelector("#adminPassword");

        togglePassword.addEventListener("click", function () {
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);
            this.querySelector("i").classList.toggle("fa-eye-slash");
        });
    </script>
</body>

</html>