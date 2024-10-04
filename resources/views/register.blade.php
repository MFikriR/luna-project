<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Guru & Siswa | Ludiflex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- Register Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-100">

            <!-- Left Box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 200px;">
                </div>
                <p class="fs-3">Daftar Sekarang</p>
                <small class="text-white text-center">Silahkan daftar sebagai Guru atau Siswa</small>
            </div>

            <!-- Right Box -->
            <div class="col-md-7 right-box">
                <h3 class="mb-4">Register Portal</h3>

                <!-- Tab Navigation -->
                <ul class="nav nav-tabs mb-4" id="registerTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="student-register-tab" data-bs-toggle="tab" data-bs-target="#student-register" type="button" role="tab" aria-controls="student-register" aria-selected="true">Siswa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="teacher-register-tab" data-bs-toggle="tab" data-bs-target="#teacher-register" type="button" role="tab" aria-controls="teacher-register" aria-selected="false">Guru</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="registerTabContent">
                    <!-- Student Register Tab -->
                    <div class="tab-pane fade show active" id="student-register" role="tabpanel" aria-labelledby="student-register-tab">
                        <form>
                            <div class="mb-3">
                                <label for="studentName" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" id="studentName" placeholder="Masukkan nama siswa">
                            </div>
                            <div class="mb-3">
                                <label for="studentEmail" class="form-label">Email Siswa</label>
                                <input type="email" class="form-control" id="studentEmail" placeholder="Masukkan email siswa">
                            </div>
                            <div class="mb-3">
                                <label for="studentPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="studentPassword" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar Siswa</button>
                        </form>
                    </div>

                    <!-- Teacher Register Tab -->
                    <div class="tab-pane fade" id="teacher-register" role="tabpanel" aria-labelledby="teacher-register-tab">
                        <form>
                            <div class="mb-3">
                                <label for="teacherName" class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" id="teacherName" placeholder="Masukkan nama guru">
                            </div>
                            <div class="mb-3">
                                <label for="teacherEmail" class="form-label">Email Guru</label>
                                <input type="email" class="form-control" id="teacherEmail" placeholder="Masukkan email guru">
                            </div>
                            <div class="mb-3">
                                <label for="teacherPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="teacherPassword" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar Guru</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Guru & Siswa | Ludiflex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- Register Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-100">

            <!-- Left Box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 200px;">
                </div>
                <p class="fs-3">Daftar Sekarang</p>
                <small class="text-white text-center">Silahkan daftar sebagai Guru atau Siswa</small>
            </div>

            <!-- Right Box -->
            <div class="col-md-7 right-box">
                <h3 class="mb-4">Register Portal</h3>

                <!-- Tab Navigation -->
                <ul class="nav nav-tabs mb-4" id="registerTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="student-register-tab" data-bs-toggle="tab" data-bs-target="#student-register" type="button" role="tab" aria-controls="student-register" aria-selected="true">Siswa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="teacher-register-tab" data-bs-toggle="tab" data-bs-target="#teacher-register" type="button" role="tab" aria-controls="teacher-register" aria-selected="false">Guru</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="registerTabContent">
                    <!-- Student Register Tab -->
                    <div class="tab-pane fade show active" id="student-register" role="tabpanel" aria-labelledby="student-register-tab">
                        <form>
                            <div class="mb-3">
                                <label for="studentName" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" id="studentName" placeholder="Masukkan nama siswa">
                            </div>
                            <div class="mb-3">
                                <label for="studentEmail" class="form-label">Email Siswa</label>
                                <input type="email" class="form-control" id="studentEmail" placeholder="Masukkan email siswa">
                            </div>
                            <div class="mb-3">
                                <label for="studentPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="studentPassword" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar Siswa</button>
                        </form>
                    </div>

                    <!-- Teacher Register Tab -->
                    <div class="tab-pane fade" id="teacher-register" role="tabpanel" aria-labelledby="teacher-register-tab">
                        <form>
                            <div class="mb-3">
                                <label for="teacherName" class="form-label">Nama Guru</label>
                                <input type="text" class="form-control" id="teacherName" placeholder="Masukkan nama guru">
                            </div>
                            <div class="mb-3">
                                <label for="teacherEmail" class="form-label">Email Guru</label>
                                <input type="email" class="form-control" id="teacherEmail" placeholder="Masukkan email guru">
                            </div>
                            <div class="mb-3">
                                <label for="teacherPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="teacherPassword" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar Guru</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
