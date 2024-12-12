@extends('layouts.materilayout')
@section('title', 'Bab 1: Offers & Suggestions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
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

        <!-- Bagian Suggestions -->
        
    </div>
</div>

<div class="pagination">
    <a href="{{ route('bab1.page', ['page' => 1]) }}" class="btn active">1</a>
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab1.page', ['page' => 3]) }}" class="btn">3</a>
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn btn-back">Next</a>
</div>
@endsection