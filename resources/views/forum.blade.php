@extends('layouts.main')

@section('title', 'Forum')
@section('content')
    <style>
        body {
            background-color: #47B5FF;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        .container.active {
            margin-left: 270px;
            width: calc(100% - 250px);
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .forum-list {
            list-style: none;
            padding: 0;
        }

        .forum-list li {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .forum-list li:last-child {
            border-bottom: none;
        }

        .forum-list li a {
            text-decoration: none;
            font-size: 18px;
            color: #3498db;
        }

        .forum-list li a:hover {
            color: #2980b9;
        }

        .forum-description {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
        }


        /* Content styles */
        .content {
            transition: margin-left 0.3s ease, width 0.3s ease;
            margin-left: 0px;
            width: 100%;
        }

        .content.active {
            margin-left: 0px; /* Geser konten ke kanan sebesar lebar sidebar */
            width: calc(100% - 0px); /* Sesuaikan lebar konten */
        }

    </style>
</head>
<body>
    <div class="container">
        
        <!-- Konten -->
        <div class="content">

            <h1>English Learning Forum: Introduction and Self-Description</h1>
            <ul class="forum-list">
                @foreach ($topics as $topic)
                <li>
                    <a href="#">{{ $topic['title'] }}</a>
                    <p class="forum-description">{{ $topic['description'] }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>
</html>
@endsection