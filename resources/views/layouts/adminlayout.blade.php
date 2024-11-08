<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/adminlayout.css') }}">
</head>
<body>

    <div class="layout-wrapper">
        <!-- {{-- SIDEBAR --}} -->
        <section id="sidebar">
            <a href="#" class="brand"><i class='bx bxs-user icon'></i>Admin</a>
            <ul class="side-menu">
                <li><a href="#" class="active"><i class='bx bxs-dashboard icon'></i>Dashboard</a></li>
                <li>
                    <a href="#"><i class='bx bxs-user-detail icon'></i>Manajemen Siswa <i class='bx bx-chevron-right icon-right icon'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('admin.daftar-siswa')}}">Daftar Siswa</a></li>
                        <li><a href="{{ route('admin.tambah-siswa')}}">Tambah Siswa</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class='bx bxs-user-circle icon'></i>Profile</a></li>
                <li><a href="#"><i class='bx bx-log-out icon'></i>Logout</a></li>
            </ul>
        </section>
        <!-- {{-- SIDEBAR --}} -->

        <section id="content">
            <!-- {{-- NAVBAR --}} -->
            <nav>
                <i class='bx bx-menu toggle-sidebar'></i>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search icon'></i>
                    </div>
                </form>
                <a href="#" class="nav-link">
                    <i class='bx bxs-bell icon'></i>
                    <span class="badge">5</span>
                </a>
                <a href="#" class="nav-link">
                    <i class='bx bxs-message-square-dots icon'></i>
                    <span class="badge">8</span>
                </a>
                <span class="divider"></span>
                <div class="profile">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                    <ul class="profile-link">
                        <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                        <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
                        <li><a href="#"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- {{-- NAVBAR --}} -->

            <!-- {{-- CONTENT DINAMIS --}} -->
            <div class="main-content">
                @yield('content')  <!-- Tempat untuk konten dinamis -->
            </div>
            <!-- {{-- CONTENT DINAMIS --}} -->
        </section>
    </div>

    <script src="{{ asset('js/adminlayout.js') }}"></script>
    <script>
        // JavaScript untuk toggle sidebar
        const toggleButton = document.querySelector('.toggle-sidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', function() {
            sidebar.classList.toggle('hide');  // Menambah/menghapus class 'hide'
        });
    </script>
</body>
</html>
