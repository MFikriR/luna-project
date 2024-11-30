<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #CCE1EB; /* Warna lebih terang untuk latar */
            font-family: 'Poppins', sans-serif;
        }
    
        /* Sidebar style */
        #sidebar {
            width: 250px;
            background-color: #B4C8C8; /* Warna sidebar */
            color: #54868B; /* Warna teks sidebar */
            transition: all 0.3s;
        }
    
        #sidebar.active {
            width: 0;
            overflow: hidden;
        }
    
        /* Main content style */
        .main-content {
            width: calc(100% - 250px);
            transition: all 0.3s;
        }
    
        .main-content.active {
            width: 100%;
        }
    
        /* Gaya untuk sidebar menu */
        #sidebar ul.components {
            padding: 0;
            margin: 0;
            list-style: none;
        }
    
        #sidebar ul li {
            margin: 0;
            padding: 0;
            text-align: center;
        }
    
        #sidebar ul li a {
            display: block;
            padding: 15px;
            margin: 5px;
            font-size: 16px;
            color: #54868B; /* Warna teks menu */
            background-color: #D3E3EB; /* Warna latar menu */
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            text-align: left;
        }
    
        /* Hover effect */
        #sidebar ul li a:hover {
            background-color: #97C5D3; /* Warna hover menu */
            color: #CCE1EB; /* Warna teks saat hover */
        }
    
        .footer {
            background-color: #54868B; /* Warna footer lebih gelap */
            padding: 10px 0;
            color: #D3E3EB; /* Warna teks footer */
            text-align: center;
        }
    </style>
    
</head>

<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="bg-light">
            <div class="sidebar-header text-center p-3">
                <h4>Menu</h4>
            </div>
            <ul class="list-unstyled components">
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('bab1.page', ['page' => 1]) }}">Materi</a></li>
                <li><a href="{{ route('mini-games') }}">Mini Games</a></li>
                <li><a href="{{ route('forum') }}">Forum</a></li>
            </ul>
        </nav>

        <!-- Main content -->
        <div class="main-content w-100">
            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <button type="button" id="sidebarToggle" class="btn btn-primary me-3">☰</button>
                    <span class="navbar-brand">@yield('header', 'Dashboard')</span>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span id="username">{{ Auth::user()->name ?? 'User' }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{'profile'}}">Pengaturan Profil</a></li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dynamic content -->
            <div class="content p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p style="margin-top: 20px">© 2024 - Project Pembelajaran. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            // Toggle kelas 'active' untuk sidebar dan konten utama
            document.getElementById('sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });
    </script>
</body>


</html>
