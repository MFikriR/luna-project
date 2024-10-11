@extends('layouts.main')

@section('title', 'Video Tutorial')
@section('content')

    <style>
        .container {
            padding: 20px;
            text-align: center;
        }

        .video-container {
            margin: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        iframe {
            width: 80%;
            height: 400px;
            border: none;
        }

        .video-title {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <!-- Konten -->
        <div class="content">
            <h1>Video Tutorials</h1>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/bPYQ6HzGh8k" allowfullscreen></iframe>
                <p class="video-title">Materi Introduction</p>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/koOql6CRAAI" allowfullscreen></iframe>
                <p class="video-title">Materi Self-introduction</p>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/VARKZpKPyvQ" allowfullscreen></iframe>
                <p class="video-title">Materi Introduction lainnya</p>
            </div>
        </div>
    </div>

</body>
</html>
@endsection