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
            <div class="conversation-container">
                <p id="botMessage">Hi there! How are you today?</p>
                <div id="optionsContainer">
                    <button class="btn btn-outline-primary" onclick="handleOptionClick(1)">I’m good, thank you!</button>
                    <button class="btn btn-outline-primary" onclick="handleOptionClick(2)">Not so great, unfortunately.</button>
                </div>
            </div>
        </div>

        <!-- Tombol Reset -->
        <div class="reset-button">
            <button class="btn btn-secondary" id="resetButton" onclick="resetConversation()">Reset</button>
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

    let currentStep = null;

    // Fungsi untuk menangani klik pada opsi jawaban
    function handleOptionClick(step) {
        currentStep = step; // Simpan langkah saat ini
        const stepData = conversationSteps[step];

        // Tampilkan balasan bot
        document.getElementById("botMessage").innerText = stepData.botReply;

        // Bersihkan opsi lama
        const optionsContainer = document.getElementById("optionsContainer");
        optionsContainer.innerHTML = "";

        // Tampilkan opsi berikutnya jika ada
        if (stepData.options.length > 0) {
            stepData.options.forEach(option => {
                const button = document.createElement("button");
                button.classList.add('btn', 'btn-outline-primary', 'mt-2');
                button.innerText = option.text;
                button.onclick = () => handleOptionClick(option.nextStep);
                optionsContainer.appendChild(button);
            });
        }
    }

    // Fungsi untuk mereset percakapan
    function resetConversation() {
        currentStep = null;

        // Tampilkan pesan awal bot
        document.getElementById("botMessage").innerText = "Hi there! How are you today?";

        // Tampilkan kembali opsi awal
        const optionsContainer = document.getElementById("optionsContainer");
        optionsContainer.innerHTML = `
            <button class="btn btn-outline-primary" onclick="handleOptionClick(1)">I’m good, thank you!</button>
            <button class="btn btn-outline-primary" onclick="handleOptionClick(2)">Not so great, unfortunately.</button>
        `;
    }
</script>

@endsection