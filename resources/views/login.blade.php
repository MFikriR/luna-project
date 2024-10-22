<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .left-box {
            background: #103cbe;
            padding: 30px;
            color: white;
        }

        .right-box {
            padding: 30px;
        }
    </style>
</head>

<body style="background-color: #47B5FF">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center pt-4">

        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-100">

            <!-- Left Box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/orang belajar.png') }}" class="img-fluid" style="width: 200px;">
                </div>
                <p class="fs-3">Selamat Datang</p>
                <small class="text-white text-center">Silahkan login sebagai Siswa</small>
            </div>

            <!-- Right Box -->
            <div class="col-md-7 right-box">
                <h3 class="mb-4">Login Portal Siswa</h3>

                <!-- Student Login Form -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('studentPassword');

        togglePassword.addEventListener('click', function() {
            // Toggle password visibility
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
