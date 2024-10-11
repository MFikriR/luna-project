@extends('layouts.main')

@section('title', 'Quiz')
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
            transition: margin-left 0.3s ease, width 0.3s ease; /* Menambahkan transisi */
        }

        .container.active {
            margin-left: 250px; /* Geser container ke kanan sebesar lebar sidebar */
            width: calc(100% - 350px); /* Kurangi lebar container saat sidebar terbuka */
        }


        h1 {
            text-align: center;
            color: #2980b9;
        }

        .conversation {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .conversation p {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .person1 {
            background-color: #3498db;
            color: white;
            text-align: left;
        }

        .person2 {
            background-color: #2ecc71;
            color: white;
            text-align: right;
        }

        .essay {
            margin-top: 20px;
        }

        .essay label {
            font-weight: bold;
        }

        .essay textarea {
            width: 100%;
            height: 100px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #bdc3c7;
        }

        .submit-btn {
            margin-top: 20px;
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #c0392b;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }

        .result.correct {
            color: green;
        }

        .result.incorrect {
            color: red;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            
            <h1>Quiz - Conversation</h1>

            <!-- Percakapan antara dua orang -->
            <div class="conversation">
                <p class="person1">Person 1: Hi! How are you doing today?</p>
                <p class="person2">Person 2: I'm doing well, thank you! How about you?</p>
                <p class="person1">Person 1: I'm great, thanks! What are your plans for the weekend?</p>
                <p class="person2">Person 2: I'm planning to go hiking with some friends. How about you?</p>
                <p class="person1">Person 1: Sounds fun! I might just relax at home. What else do you enjoy doing in your free time?</p>
            </div>

            <!-- Pertanyaan esai -->
            <form action="{{ route('quiz.submit') }}" method="POST">
                @csrf
                <div class="essay">
                    <label for="answer">Question: How would you respond to Person 1's last question?</label>
                    <textarea id="answer" name="answer" placeholder="Type your answer here..."></textarea>
                </div>

                <!-- Tombol submit -->
                <button type="submit" class="submit-btn">Submit Answer</button>
            </form>

            <!-- Hasil jawaban -->
            @if(isset($result))
            <div class="result {{ $status }}">
                {{ $result }}
            </div>
            @endif
        </div>
    </div>

</body>
</html>
@endsection