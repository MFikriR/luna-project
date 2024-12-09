@extends('layouts.materilayout')
@section('title', 'Bab 2: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <!-- Bab 2: Self-Description -->
        <h2 style="color: #000">Bab 2: Opinions & Thoughts</h2>
        <p>Membedakan fungsi sosial, struktur teks, dan unsur kebahasaan beberapa teks khusus dalam bentuk undangan resmi dengan memberi dan meminta informasi terkait kegiatan sekolah/tempat kerja sesuai dengan konteks penggunaannya.</p>
        
        <h2>A: Pre-Activity</h2>
        <h3>Conversation 1</h3>
        <p>Dengan pasangan, baca percakapan yang diberikan di bawah ini.</p>

        <div class="example-box">
            <div class="chat-wrapper">
                <!-- Gambar Orang Kiri (A) -->
                <img src="{{ asset('img/girl5.png') }}" alt="Person A" class="person-left">
            
                <div class="chat-container">
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            Why are you looking so sad?
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            I was reading an opinion article on bullying. It made me extremely sad.
                        </div>
                    </div>
                
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            Ah! People like to exaggerate things, bullying as such is no big deal.
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            No, I don't think so. Bullying is prevalent in our society. It is important that everyone should be made aware of this social evil.
                        </div>
                    </div>
                
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            I don't agree with you. Little bit teasing here and there is acceptable.
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            I am of the opinion that no one has any right to harass or make people feel inferior. No one should have that kind of power.
                        </div>
                    </div>
                
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            Hey! Stop! You are getting too serious!
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            Yes! You should be serious about it as well. I would like to point out that bullying is everyone's problem and responsibility. If you condone bullying in any way, shape or form it means you are taking part in it whether it is directly or indirectly by being silent.
                        </div>
                    </div>

                    <div class="discussion-questions mt-4" style="background-color:white;">
                        <h3>Discuss these questions with your partner:</h3>
                        <ol>
                            <li>What is happening between Siti and Jane?</li>
                            <li>What kind of conversation are they having?</li>
                            <li>Whom do you agree with, Jane or Siti? Why?</li>
                            <li>Have you witnessed bullying? Describe how you felt.</li>
                        </ol>
                    </div>
                </div>            
                <!-- Gambar Orang Kanan (B) -->
                <img src="{{ asset('img/girl4.png') }}" alt="Person B" class="person-right" style="width: 200px;">
            </div>
        </div>

        <!-- Bagian Suggestions -->
        <div id="opinions">
            <h2>B: Building-Blocks</h2>
            <h3>Opinions / Pendapat</h3>
            <p>Opini adalah cara Anda merasa atau berpikir tentang sesuatu. Pendapat kita tentang sesuatu atau seseorang didasarkan pada perspektif kita. Setiap kali kita memberi atau mengungkapkan pendapat kita, penting untuk memberikan alasan atau contoh untuk mendukung pendapat kita.</p>
            <h3>Some Opinions :</h3>
            <div class="example-box">
                <div class="chat-wrapper">
                    <!-- Gambar Orang Kiri (A) -->
                    <img src="{{ asset('img/boy4.png') }}" alt="Person A" class="person-left">
                
                    <div class="chat-container">
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid cyan; background-color:white;">
                                I like Harry Potter movies because the magic seems so real.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(250, 185, 46); background-color:white;">
                                I don't agree with you. Harry Potter movies are just overrated.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid cyan; background-color:white;">
                                I like playing tag because it is so much fun.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(250, 185, 46); background-color:white;">
                                I don't like playing tag because people end up fighting.
                            </div>
                        </div>

                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(250, 185, 46); background-color:white;">
                                In my opinion, the government should provide means of sustenance for under privileged people instead of building tall towers.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid cyan; background-color:white;">
                                I agree with what you are saying but have you ever thought that building tall towers provides work for unemployed people?
                            </div>
                        </div>
                    </div>            
                    <!-- Gambar Orang Kanan (B) -->
                    <img src="{{ asset('img/girl7.png') }}" alt="Person B" class="person-right" style="width: 200px;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pagination">
    <a href="{{ route('bab2.page', ['page' => 1]) }}" class="btn active">1</a>
    <a href="{{ route('bab2.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab2.page', ['page' => 3]) }}" class="btn">3</a>
    <a href="{{ route('bab2.page', ['page' => 2]) }}" class="btn btn-back">Next</a>
</div>

@endsection