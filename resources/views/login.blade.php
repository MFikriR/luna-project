<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Guru & Siswa | Ludiflex</title>
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

        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area w-100">

            <!-- Left Box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 200px;">
                </div>
                <p class="fs-3">Selamat Datang</p>
                <small class="text-white text-center">Silahkan login sebagai Guru atau Siswa</small>
            </div>

            <!-- Right Box -->
            <div class="col-md-7 right-box">
                <h3 class="mb-4">Login Portal</h3>

                <!-- Tab Navigation -->
                <ul class="nav nav-tabs mb-4" id="loginTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="student-tab" data-bs-toggle="tab" data-bs-target="#student" type="button" role="tab" aria-controls="student" aria-selected="true">Siswa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher" type="button" role="tab" aria-controls="teacher" aria-selected="false">Guru</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="loginTabContent">
                    <!-- Student Tab -->
                    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <form>
                            <div class="mb-3">
                                <label for="studentEmail" class="form-label">Email Siswa</label>
                                <input type="email" class="form-control" id="studentEmail" placeholder="Masukkan email siswa">
                            </div>
                            <div class="mb-3">
                                <label for="studentPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="studentPassword" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login Siswa</button>
                        </form>
                    </div>

                    <!-- Teacher Tab -->
                    <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                        <form>
                            <div class="mb-3">
                                <label for="teacherEmail" class="form-label">Email Guru</label>
                                <input type="email" class="form-control" id="teacherEmail" placeholder="Masukkan email guru">
                            </div>
                            <div class="mb-3">
                                <label for="teacherPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="teacherPassword" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login Guru</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Get elements for the tabs and buttons
        const studentTab = new bootstrap.Tab(document.querySelector('#student-tab'));
        const teacherTab = new bootstrap.Tab(document.querySelector('#teacher-tab'));
        const switchToTeacher = document.getElementById('switchToTeacher');
        const switchToStudent = document.getElementById('switchToStudent');

        // Add event listener for switching to Teacher tab
        switchToTeacher.addEventListener('click', function() {
            teacherTab.show(); // Show the Teacher tab
        });

        // Add event listener for switching to Student tab
        switchToStudent.addEventListener('click', function() {
            studentTab.show(); // Show the Student tab
        });
    </script>
</body>
</html>