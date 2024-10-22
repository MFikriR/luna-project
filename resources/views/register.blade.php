<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .container {
            max-width: 850px;
            margin-top: 10px;
        }

        .left-box {
            background: #103cbe;
            padding: 30px;
            color: white;
        }

        .right-box {
            padding: 30px;
        }

        .toggle-password {
            cursor: pointer;
        }
    </style>
</head>

<body style="background-color: #47B5FF">

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center pt-5">

        <!-- Register Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-100">

            <!-- Left Box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/orang regis.png') }}" class="img-fluid" style="width: 200px;">
                </div>
                <p class="fs-3">Daftar Sekarang</p>
                <small class="text-white text-center">Silahkan daftar sebagai Siswa</small>
            </div>

            <!-- Right Box -->

            <div class="col-md-7 right-box">
                <h3 class="mb-4">Register Portal Siswa</h3>

                <!-- Student Register Form -->
                <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="studentName" name="nama"
                            placeholder="Masukkan nama siswa" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentEmail" class="form-label">Email Siswa</label>
                        <input type="email" class="form-control" id="studentEmail" name="email"
                            placeholder="Masukkan email siswa" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="studentPassword" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="studentPassword" name="password"
                                placeholder="Masukkan password">
                            <span class="input-group-text toggle-password" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="passwordConfirmation"
                            name="password_confirmation" placeholder="Konfirmasi password">
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir"
                            placeholder="Masukkan tanggal lahir" value="{{ old('tanggalLahir') }}">
                        @error('tanggalLahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki-laki" {{ old('jenisKelamin') == 'laki-laki' ? 'selected' : '' }}>
                                Laki-laki</option>
                            <option value="perempuan" {{ old('jenisKelamin') == 'perempuan' ? 'selected' : '' }}>
                                Perempuan</option>
                        </select>
                        @error('jenisKelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="profilePicture" class="form-label">Foto Profil</label>
                        <input type="file" class="form-control" id="profilePicture" name="foto" accept="image/*"
                            required>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
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
