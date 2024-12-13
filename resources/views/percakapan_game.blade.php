@extends('layouts.gameslayout')
@section('title', 'Percakapan')
@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
    }
    
    .chat-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    
    .chat-row {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .left {
        flex-direction: row; /* Orang kiri (A) */
        justify-content: flex-start;
    }
    
    .right {
        flex-direction: row-reverse; /* Orang kanan (B) */
        justify-content: flex-end;
    }

    .chat-bubble {
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 10px;
        width: fit-content;
    }
        
    .left-bubble {
        background-color: #d9edf7;
        align-self: flex-start;
        margin-right: auto;
    }
    
    .right-bubble {
        background-color: #fce5cd;
        align-self: flex-end;
        margin-left: auto;
    }
    
    .person-left, .person-right {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .response-options {
        display: flex;
        flex-direction: column;
        margin-top: 15px;
    }
        
    .response-options button {
        margin-top: 5px;
        text-align: left;
    }
    
    .reset-button {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .person-left, .person-right {
    width: 70px;  /* Mengubah ukuran gambar menjadi 150px */
    height: auto;  /* Menjaga proporsi gambar */
    }

</style>

<div class="container">
    <div class="content">
        <h1 class="text-center mb-4">Mini Game: Percakapan</h1>
        <div class="chat-container" id="chatContainer">
            <!-- Percakapan awal -->
            <div class="chat-row left">
                <!-- Gambar Orang Kiri (A) -->
                <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
                <div class="chat-bubble left-bubble">
                    <strong>A:</strong> Hello! How are you today?
                </div>
            </div>
            
            <!-- Pilihan jawaban awal -->
            <div class="response-options" id="responseOptions">
                <button class="btn btn-outline-primary" onclick="nextConversation('I’m good, thank you!', 1)">I’m good, thank you!</button>
                <button class="btn btn-outline-primary" onclick="nextConversation('Not so great, unfortunately.', 2)">Not so great, unfortunately.</button>
            </div>
        </div>

        <!-- Tombol Reset -->
        <div class="reset-button">
            <button class="btn btn-secondary" onclick="resetConversation()">Reset</button>
        </div>
    </div>
</div>

<script>
    // Objek percakapan yang menyimpan respons berdasarkan jawaban
    const conversationSteps = {
        1: {
            userResponse: "I’m good, thank you!",
            botReply: "That's great to hear! What are you up to today?",
            options: [
                { text: "Just relaxing at home.", nextStep: 3 },
                { text: "Going out with friends.", nextStep: 4 }
            ]
        },
        2: {
            userResponse: "Not so great, unfortunately.",
            botReply: "Oh no, I hope things get better. Would you like to talk about it?",
            options: [
                { text: "Sure, I'd love to.", nextStep: 5 },
                { text: "Maybe some other time.", nextStep: 6 }
            ]
        },
        3: {
            userResponse: "Just relaxing at home.",
            botReply: "That sounds peaceful! Sometimes a quiet day is all you need.",
            options: []
        },
        4: {
            userResponse: "Going out with friends.",
            botReply: "Have fun! Spending time with friends is always great.",
            options: []
        },
        5: {
            userResponse: "Sure, I'd love to.",
            botReply: "I'm here to listen. Sometimes it helps to talk things out.",
            options: []
        },
        6: {
            userResponse: "Maybe some other time.",
            botReply: "Alright, no worries. I'm here whenever you need to talk.",
            options: []
        }
    };

    // Fungsi untuk menampilkan percakapan berikutnya
    function nextConversation(response, step) {
        // Menghapus pilihan yang sudah dipilih
        const responseOptions = document.getElementById('responseOptions');
        responseOptions.innerHTML = ''; // Clear previous options

        // Menampilkan jawaban pengguna (Orang B)
        const userResponse = document.createElement('div');
        userResponse.classList.add('chat-row', 'right');
        userResponse.innerHTML = `
            <!-- Gambar Orang Kanan (B) -->
            <img src="{{ asset('img/boy.png') }}" alt="Person B" class="person-right">
            <div class="chat-bubble right-bubble">
                <strong>B:</strong> ${response}
            </div>
        `;
        document.getElementById('chatContainer').appendChild(userResponse);

        // Mendapatkan percakapan berikutnya dari objek conversationSteps
        const nextStep = conversationSteps[step];
        const nextBubble = document.createElement('div');
        nextBubble.classList.add('chat-row', 'left');
        nextBubble.innerHTML = `
            <!-- Gambar Orang Kiri (A) -->
            <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
            <div class="chat-bubble left-bubble">
                <strong>A:</strong> ${nextStep.botReply}
            </div>
        `;
        document.getElementById('chatContainer').appendChild(nextBubble);

        // Menambahkan pilihan jawaban berikutnya jika ada
        if (nextStep.options.length > 0) {
            nextStep.options.forEach(option => {
                const optionButton = document.createElement('button');
                optionButton.classList.add('btn', 'btn-outline-primary', 'mt-2');
                optionButton.textContent = option.text;
                optionButton.onclick = () => nextConversation(option.text, option.nextStep);
                responseOptions.appendChild(optionButton);
            });
        }
    }

    // Fungsi untuk mereset percakapan
    function resetConversation() {
        // Menghapus semua percakapan dan mengembalikan ke kondisi awal
        const chatContainer = document.getElementById('chatContainer');
        chatContainer.innerHTML = `
            <div class="chat-row left">
                <!-- Gambar Orang Kiri (A) -->
                <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
                <div class="chat-bubble left-bubble">
                    <strong>A:</strong> Hello! How are you today?
                </div>
            </div>
        `;

        // Mengembalikan pilihan jawaban awal
        const responseOptions = document.getElementById('responseOptions');
        responseOptions.innerHTML = `
            <button class="btn btn-outline-primary" onclick="nextConversation('I’m good, thank you!', 1)">I’m good, thank you!</button>
            <button class="btn btn-outline-primary" onclick="nextConversation('Not so great, unfortunately.', 2)">Not so great, unfortunately.</button>
        `;
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
