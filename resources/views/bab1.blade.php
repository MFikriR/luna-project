<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bab 1: Introduction - Belajar Bahasa Inggris</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f1f1f1;
            padding-top: 20px;
            overflow-x: hidden;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            color: #333;
            display: block;
        }
        .sidebar a:hover {
            background-color:aquamarine;
            color: #000;
        }
        .main-content {
            margin-left: 250px; /* Lebar sidebar */
            padding: 20px;
        }
        .main-content h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .main-content h2 {
            font-size: 20px;
            margin-top: 20px;
            color:darkcyan ;
        }
        .main-content h3 {
            font-size: 20px;
        }
        .main-content p {
            font-size: 16px;
        }
        .example-box {
            background-color: #e0e0e0;
            border-left: 6px solid #4CAF50;
            padding: 15px;
            margin: 20px 0;
        }
        .example-box code {
            font-family: monospace;
            background-color: #e0e0e0;
            padding: 2px 5px;
        }
        .btn-next {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
        }
        .btn-next:hover {
            background-color: #45a049;
            color: white;
        }
        .breadcrumb {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }
        .chat-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .chat-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            flex-grow: 1;
            margin: 0 20px;
        }
        .chat-row {
            display: flex;
            align-items: flex-start;
        }
        .chat-bubble {
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 60%;
            position: relative;
            font-size: 16px;
        }
        .left {
            background-color: #d9edf7;
            margin-right: auto;
            display: flex;
            align-items: center;
        }
        .right {
            background-color: #fce5cd;
            margin-left: auto;
            display: flex;
            align-items: center;
        }
        .left-bubble {
            order: 1;
        }
        .right-bubble {
            order: 0;
        }
        /* Left triangle (A's bubble) */
        .chat-bubble.left::before {
            content: "";
            position: absolute;
            left: -10px;
            top: 15px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent #d9edf7 transparent transparent;
        }
        /* Right triangle (B's bubble) */
        .chat-bubble.right::before {
            content: "";
            position: absolute;
            right: -10px;
            top: 15px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent transparent transparent #fce5cd;
        }
       /* Image styling with increased size */
        .person-left, .person-right {
            width: 150px; /* Ganti ukuran sesuai kebutuhan */
            height: auto;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#offers-suggestion">Bab 1: Offers & Suggestions</a>
        <a href="#opinions-thoughts">Bab 2: Opinions & Thoughts</a>
        <a href="#party-time">Bab 3: Party Time</a>
        <a href="#national-disaster">Bab 4: National Disaster</a>
        <a href="#letter-writing">Bab 5: Letter Writing</a>
    </div>
    

    <!-- Main Content -->
    <div class="main-content">
        
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('materi')}}">Materi Pembelajaran</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bab 1: Offers & Suggestion</li>
            </ol>
        </nav>

        <!-- Bab 1: Introduction -->
        <h1 id="intro">Bab 1: Offers & Suggestion</h1>
        <p>Menerapkan fungsi sosial, struktur teks, dan unsur kebahasaan teks interaksi dalam bahasa Inggris.</p>

        <h2>A: Pre-Activity</h2>
        <h3>Conversation 1</h3>
        <p>Dengan pasangan, baca percakapan yang diberikan di bawah ini.</p>
        <div class="example-box">
            <div class="chat-wrapper">
                <!-- Gambar Orang Kiri (A) -->
                <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
            
                <div class="chat-container">
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             Hi, John.
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             Hi, Jane. What are you doing?
                        </div>
                    </div>
            
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             Nothing much. Would you like to go to movies?
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             I would love to, but not right now.
                        </div>
                    </div>

                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             How about in the afternoon?
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             Great! What movie do you want to watch?
                        </div>
                    </div>
            
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                              Let's watch “Ring”.
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             I would rather not. I am not much into horror movies. How about Peanuts?
                        </div>
                    </div>

                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             Ok. Let's go. When do you want to go?
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             4 o'clock show.
                        </div>
                    </div>
            
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             It sounds good. Okay, see you then!
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             Okay, see you!
                        </div>
                    </div>
                </div>
            
                <!-- Gambar Orang Kanan (B) -->
                <img src="{{ asset('img/boy.png') }}" alt="Person B" class="person-right">
            </div>
        </div>


        <h3>Conversation 2</h3>
        <p>Dengan pasangan, baca percakapan yang diberikan di bawah ini.</p>
        <div class="example-box">
            <div class="chat-wrapper">
                <!-- Gambar Orang Kiri (A) -->
                <img src="{{ asset('img/girl2.png') }}" alt="Person A" class="person-left">
            
                <div class="chat-container">
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             Hello, Jane.
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             Hi, Siti.
                        </div>
                    </div>
            
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             You look tired. What is going on?
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             I am working on my project paper. It is 
                            due tomorrow. I don't think I will be able to finish it.                            
                        </div>
                    </div>

                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             Would you like any help?
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             Yes, please. I would really appreciate it.
                        </div>
                    </div>
            
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble">
                             Tell me what I can do and I will start right away.
                        </div>
                    </div>
            
                    <!-- Percakapan Kanan (B) -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble">
                             Thank you! You are an angel.
                        </div>
                    </div>
                </div>
            
                <!-- Gambar Orang Kanan (B) -->
                <img src="{{ asset('img/girl3.png') }}" alt="Person B" class="person-right">
            </div>
        </div>

        <h2>B: Building-Blocks</h2>
        <h3>Suggesting and Offering</h3>
        <div class="example-box">
            <div class="chat-wrapper">
                <div class="chat-container">
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="background-color: pink">
                            Suggest to give a suggestion that is to introduce or propose an idea or a plan for someone’s consideration.
                        </div>
                    </div>

                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="background-color:yellow">
                             Suggestions are abstract and can be in form of solutions, advice, plan, and idea. it can be accepted or refused
                        </div>
                    </div>

                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="background-color:aqua">
                             Social function : to facilitate interpersonal communication between different people
                        </div>
                    </div>

                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="background-color:orange">
                             For example: - Let's finish our home work first. - Let's go home.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2>C : Example Suggestions</h2>
        <div class="example-box">
            <div class="chat-wrapper">
                <div class="chat-container">
                    <!-- Percakapan Kiri (A) -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="background-color:lightsalmon">
                            <ul>
                                <li>Let's go to the library.</li>
                                <li>Let's go to movies.</li>
                                <li>Why don't you do your homework before going out?</li>
                                <li>We could eat at home today.</li>
                                <li>What about eating at the new place?</li>
                                <li>How about going to Sam's place first?</li>
                                <li>I suggest that we call it a day.</li>
                                <li>You need to change your sleeping habits.</li>
                                <li>I think you should go and meet her.</li>
                                <li>I think we should do it this way.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latihan Soal -->
        <h2>D: Latihan Soal</h2>
        <p>Jawablah pertanyaan berikut dengan menggunakan kalimat yang telah dipelajari.</p>

        <p><strong>1. Bagaimana cara menawarkan bantuan kepada teman yang kesulitan dalam belajar?</strong></p>
        <input type="text" class="form-control" placeholder="Tulis jawaban Anda, misalnya: 'Would you like some help with your studies?'">

        <p><strong>2. Bagaimana Anda memberikan saran kepada seseorang yang ingin meningkatkan keterampilan berbahasa Inggris?</strong></p>
        <input type="text" class="form-control" placeholder="Tulis jawaban Anda, misalnya: 'I suggest you practice speaking English every day.'">

        <p><strong>3. Apa yang akan Anda tawarkan kepada teman yang baru saja mengalami hari yang berat?</strong></p>
        <input type="text" class="form-control" placeholder="Tulis jawaban Anda, misalnya: 'Would you like to talk about it?'">


        <!-- Tombol Next -->
        <a href="#" class="btn-next">Next: Bab 2 - Self-Description</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
