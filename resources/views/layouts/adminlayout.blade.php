<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/adminlayout.css') }}">

    <style>
        /* Styling Navbar - Navbar sampai ujung */
        nav {
            background-color: #007bff;
            padding: 10px 20px;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
        }

        /* Sidebar Styling */
        #sidebar {
            width: 250px;
            background-color: white;
            padding-top: 20px;
            position: fixed;
            top: 60px;
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
            z-index: 999;
            border-right: 2px solid #ddd;
        }

        #sidebar.hide {
            width: 0;
            overflow: hidden;
        }

        .side-menu li a {
            color: #343a40;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .side-menu li a:hover {
            background-color: #007bff;
            color: white;
        }

        .side-menu li a .icon {
            margin-right: 10px;
        }

        /* Content Area */
        #content {
            margin-left: 250px;
            margin-top: 60px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        #content.hide {
            margin-left: 0;
        }

        .main-content {
            padding: 20px;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 767px) {
            #sidebar {
                width: 0;
                position: absolute;
            }

            #sidebar.hide {
                width: 250px;
            }

            #content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <div class="layout-wrapper">
        <!-- Sidebar -->
        <section id="sidebar">
            <a href="#" class="brand"><i class='bx bxs-home icon'></i>Admin</a>
            <ul class="side-menu">
                <li><a href="{{ route('admin.dashboard')}}" class="active"><i class='bx bxs-dashboard icon'></i>Dashboard</a></li>
                <li>
                    <a href="#"><i class='bx bxs-user-detail icon'></i>Manajemen Siswa <i class='bx bx-chevron-right icon-right'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('admin.daftar-siswa')}}">Daftar Siswa</a></li>
                        <li><a href="{{ route('admin.tambah-siswa')}}">Tambah Siswa</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class='bx bxs-user-circle icon'></i>Profile</a></li>
                <li><a href="#"><i class='bx bx-log-out icon'></i>Logout</a></li>
            </ul>
        </section>
        <!-- Sidebar -->

        <section id="content">
            <!-- Navbar -->
            <nav>
                <div class="navbar-brand">Home</div>
            </nav>
            <!-- Navbar -->

            <!-- Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- Content -->
        </section>
    </div>

    <script src="{{ asset('js/adminlayout.js') }}"></script>
</body>
</html>
