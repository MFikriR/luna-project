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
        width: 70px;  /* Mengubah ukuran gambar menjadi 70px */
        height: auto;  /* Menjaga proporsi gambar */
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
</style>

<div class="container">
    <div class="content">
        <h1 class="text-center mb-4">Mini Game: Offers & Suggestions</h1>
        <div class="chat-container" id="chatContainer">
            <!-- Percakapan awal -->
            <div class="chat-row left">
                <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
                <div class="chat-bubble left-bubble">
                    <strong>She:</strong> Hi there! How are you today?
                </div>
            </div>
        </div>

        <!-- Pilihan jawaban awal -->
        <div class="response-options" id="optionsContainer">
            <button class="btn btn-outline-primary" onclick="handleOptionClick(1)">I’m good, thank you!</button>
            <button class="btn btn-outline-primary" onclick="handleOptionClick(2)">Not so great, unfortunately.</button>
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
            botReply: "That's great to hear! What are you in the mood for today?",
            options: [
                { text: "Let’s talk about Offers & Suggestions.", nextStep: 2 },
                { text: "I’d like to discuss Opinions.", nextStep: 8 },
                { text: "It’s Party Time!", nextStep: 14 }
            ]
        },
        2: {
            userResponse: "Let’s talk about Offers & Suggestions.",
            botReply: "Alright! Would you like me to offer suggestions, or are you looking to suggest something?",
            options: [
                { text: "I’d like to hear your suggestions.", nextStep: 3 },
                { text: "I have a suggestion.", nextStep: 4 }
            ]
        },
        3: {
            userResponse: "I’d like to hear your suggestions.",
            botReply: "Sure! How about trying a new recipe or going for a short trip this weekend?",
            options: [
                { text: "Trying a new recipe sounds fun!", nextStep: 5 },
                { text: "A short trip sounds refreshing.", nextStep: 6 }
            ]
        },
        4: {
            userResponse: "I have a suggestion.",
            botReply: "That’s great! What do you have in mind?",
            options: [
                { text: "We could organize a community event.", nextStep: 7 },
                { text: "How about a team-building activity?", nextStep: 7 }
            ]
        },
        5: {
            userResponse: "Trying a new recipe sounds fun!",
            botReply: "Awesome! Let me know how it turns out. Cooking can be a great way to relax.",
            options: []
        },
        6: {
            userResponse: "A short trip sounds refreshing.",
            botReply: "Great choice! Exploring new places can really clear your mind.",
            options: []
        },
        7: {
            userResponse: "We could organize a community event.",
            botReply: "That’s a fantastic suggestion! Bringing people together is always a good idea.",
            options: []
        },
        8: {
            userResponse: "I’d like to discuss Opinions.",
            botReply: "Alright! Do you want to share your opinion, or hear mine?",
            options: [
                { text: "I want to share my opinion.", nextStep: 9 },
                { text: "I’d like to hear your opinion.", nextStep: 10 }
            ]
        },
        9: {
            userResponse: "I want to share my opinion.",
            botReply: "Go ahead, I’m listening. What’s on your mind?",
            options: [
                { text: "I think technology has both helped and hindered us.", nextStep: 11 },
                { text: "I believe teamwork is more effective than working alone.", nextStep: 12 }
            ]
        },
        10: {
            userResponse: "I’d like to hear your opinion.",
            botReply: "I think learning to listen to different perspectives is a skill we should all practice.",
            options: []
        },
        11: {
            userResponse: "I think technology has both helped and hindered us.",
            botReply: "That’s a valid point. It’s amazing for communication but can also be distracting.",
            options: []
        },
        12: {
            userResponse: "I believe teamwork is more effective than working alone.",
            botReply: "Absolutely! Collaboration can bring out the best in everyone.",
            options: []
        },
        14: {
            userResponse: "It’s Party Time!",
            botReply: "Woohoo! What kind of party are you in the mood for?",
            options: [
                { text: "A chill movie night.", nextStep: 15 },
                { text: "A dance party with friends.", nextStep: 16 }
            ]
        },
        15: {
            userResponse: "A chill movie night.",
            botReply: "Great choice! Grab some popcorn and pick a good movie. Any genre in mind?",
            options: [
                { text: "Comedy sounds great!", nextStep: 17 },
                { text: "I’m in the mood for action.", nextStep: 18 }
            ]
        },
        16: {
            userResponse: "A dance party with friends.",
            botReply: "Let’s turn up the music! Don’t forget to set up a playlist everyone will love.",
            options: []
        },
        17: {
            userResponse: "Comedy sounds great!",
            botReply: "Laughter is the best medicine. Enjoy the show!",
            options: []
        },
        18: {
            userResponse: "I’m in the mood for action.",
            botReply: "Adrenaline-pumping movies are always exciting. Have fun!",
            options: []
        }
    };


    let currentStep = null;

    // Fungsi untuk menangani klik pada opsi jawaban
    function handleOptionClick(step) {
        currentStep = step; // Simpan langkah saat ini
        const stepData = conversationSteps[step];

        // Tampilkan balasan bot
        const chatContainer = document.getElementById("chatContainer");
        const userMessage = document.createElement("div");
        userMessage.classList.add("chat-row", "right");
        userMessage.innerHTML = `
            <img src="{{ asset('img/boy.png') }}" alt="Person B" class="person-right">
            <div class="chat-bubble right-bubble">
                <strong>You:</strong> ${stepData.userResponse}
            </div>
        `;
        chatContainer.appendChild(userMessage);

        // Tampilkan balasan bot
        const botMessage = document.createElement("div");
        botMessage.classList.add("chat-row", "left");
        botMessage.innerHTML = `
            <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
            <div class="chat-bubble left-bubble">
                <strong>She:</strong> ${stepData.botReply}
            </div>
        `;
        chatContainer.appendChild(botMessage);

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
        document.getElementById("chatContainer").innerHTML = `
            <div class="chat-row left">
                <img src="{{ asset('img/girl.png') }}" alt="Person A" class="person-left">
                <div class="chat-bubble left-bubble">
                    <strong>She:</strong> Hi there! How are you today?
                </div>
            </div>
        `;

        // Tampilkan kembali opsi awal
        const optionsContainer = document.getElementById("optionsContainer");
        optionsContainer.innerHTML = `
            <button class="btn btn-outline-primary" onclick="handleOptionClick(1)">I’m good, thank you!</button>
            <button class="btn btn-outline-primary" onclick="handleOptionClick(2)">Not so great, unfortunately.</button>
        `;
    }
</script>

@endsection
