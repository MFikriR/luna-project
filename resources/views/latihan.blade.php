@extends('layouts.main')

@section('title', 'Latihan Soal')
@section('content')
    <style>
        /* Global Styles */
        body {
            background-color: #47B5FF;
        }

        .container {
            max-width: 760px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        h2 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
        }

        .exercise {
            margin-bottom: 20px;
        }

        .exercise p {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"], .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .form-group input[type="text"]:focus, .form-group textarea:focus {
            border-color: #3498db;
            outline: none;
            background-color: white;
        }

        .btn-submit {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">

            <h2>Latihan Terjemahan: Introduction & Self-Description</h2>
            
            <form method="POST" action="{{ route('latihan.submit') }}">
                @csrf

                <!-- Introduction Exercise -->
                <div class="exercise">
                    <p>1. Terjemahkan kalimat berikut dari Bahasa Inggris ke Bahasa Indonesia:</p>
                    <blockquote>"Hello, my name is John. I am 25 years old and I am from New York. I work as a software engineer."</blockquote>

                    <div class="form-group">
                        <label for="intro_translation">Terjemahan Anda:</label>
                        <textarea name="intro_translation" id="intro_translation" rows="4" placeholder="Masukkan terjemahan Anda di sini" required>{{ old('intro_translation') }}</textarea>
                    </div>
                </div>

                <!-- Self-Description Exercise -->
                <div class="exercise">
                    <p>2. Terjemahkan kalimat berikut dari Bahasa Inggris ke Bahasa Indonesia:</p>
                    <blockquote>"I love coding and creating new applications. In my free time, I enjoy playing guitar and reading books."</blockquote>

                    <div class="form-group">
                        <label for="selfdesc_translation">Terjemahan Anda:</label>
                        <textarea name="selfdesc_translation" id="selfdesc_translation" rows="4" placeholder="Masukkan terjemahan Anda di sini" required>{{ old('selfdesc_translation') }}</textarea>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Kirim Jawaban</button>
            </form>

            <!-- Display the translation result -->
            @if (session('results'))
                <div class="result">
                    <h3>Hasil Terjemahan Anda:</h3>
                    <p><strong>Terjemahan Introduction:</strong> {{ session('results')['intro_translation'] }}</p>
                    <p><strong>Terjemahan Self-Description:</strong> {{ session('results')['selfdesc_translation'] }}</p>
                </div>
            @endif
        </div>
    </div>

</body>
</html>
@endsection