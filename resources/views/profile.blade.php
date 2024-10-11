@extends('layouts.main')

@section('title', 'Profile')
@section('content')
    <style>
        body {
            background-color: #47B5FF;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        .container.active {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .profile-info {
            text-align: center;
            
        }

        .profile-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-info p {
            font-size: 18px;
            color: #555;
        }

        /* Content styles */
        .content {
            transition: margin-left 0.3s ease, width 0.3s ease;
            margin-left: 0;
            width: 100%;
        }

        .content.active {
            margin-left: 0px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">

            <h1>Profil Pengguna</h1>
            <div class="profile-info">
                <img src="https://via.placeholder.com/150" alt="Foto Profil">
                <p><strong>Nama:</strong></p>  {{--{{ $user->name }} --}}
                <p><strong>Email:</strong> </p> {{--{{ $user->email }} --}}
                <p><strong>Member Since:</strong> </p> {{-- {{ $user->created_at->format('d M Y') }} --}}
            </div>
        </div>
    </div>

</body>
</html>
@endsection