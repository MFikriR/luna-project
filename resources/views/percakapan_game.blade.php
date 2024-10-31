<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percakapan Game</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .chat-bubble {
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            width: fit-content;
        }
        .chat-left {
            background-color: #d9edf7;
            align-self: flex-start;
            margin-right: auto;
        }
        .chat-right {
            background-color: #fce5cd;
            align-self: flex-end;
            margin-left: auto;
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
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Mini Game: Percakapan</h1>
        <div class="chat-container" id="chatContainer">
            <!-- Percakapan awal -->
            <div class="chat-bubble chat-left">
                <strong>A:</strong> Hello! How are you today?
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

            // Menampilkan jawaban pengguna
            const userResponse = document.createElement('div');
            userResponse.classList.add('chat-bubble', 'chat-right');
            userResponse.innerHTML = `<strong>B:</strong> ${response}`;
            document.getElementById('chatContainer').appendChild(userResponse);

            // Mendapatkan percakapan berikutnya dari objek conversationSteps
            const nextStep = conversationSteps[step];
            const nextBubble = document.createElement('div');
            nextBubble.classList.add('chat-bubble', 'chat-left');
            nextBubble.innerHTML = `<strong>A:</strong> ${nextStep.botReply}`;
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
                <div class="chat-bubble chat-left">
                    <strong>A:</strong> Hello! How are you today?
                </div>
            `;

            // Mengembalikan pilihan jawaban awal
            const responseOptions = document.getElementById('responseOptions');
            responseOptions.style.display = 'flex'; // Pastikan pilihan ditampilkan kembali
            responseOptions.innerHTML = `
                <button class="btn btn-outline-primary" onclick="nextConversation('I’m good, thank you!', 1)">I’m good, thank you!</button>
                <button class="btn btn-outline-primary" onclick="nextConversation('Not so great, unfortunately.', 2)">Not so great, unfortunately.</button>
            `;
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
