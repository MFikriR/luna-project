@extends('layouts.materilayout')
@section('title', 'Bab 1: Offers & Suggestions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <h2>H: Offers & Suggestions</h2>

        <!-- Teks Bacaan -->
        <div class="example-box">
            <h3>Teks Bacaan</h3>
            <p>Dalam bahasa Inggris, memberikan saran (*suggestion*) dan menawarkan bantuan (*offer*) adalah bagian penting dalam komunikasi sehari-hari. Berikut beberapa ungkapan yang sering digunakan:
            </p>
            <ul>
                <li><strong>Saran (*Suggestions*):</strong>
                    <ul>
                        <li>"I think you should..." (Saya pikir Anda sebaiknya...)</li>
                        <li>"How about..." (Bagaimana kalau...)</li>
                        <li>"Why don't you..." (Mengapa Anda tidak...)</li>
                        <li>"You could..." (Anda bisa...)</li>
                    </ul>
                </li>
                <li><strong>Penawaran (*Offers*):</strong>
                    <ul>
                        <li>"Can I help you?" (Bisakah saya membantu Anda?)</li>
                        <li>"Would you like me to...?" (Apakah Anda ingin saya...?)</li>
                        <li>"Shall I...?" (Haruskah saya...?)</li>
                        <li>"Let me..." (Biarkan saya...)</li>
                    </ul>
                </li>
            </ul>
            <p>Gunakan ungkapan-ungkapan ini untuk menunjukkan perhatian Anda terhadap orang lain dalam situasi tertentu.</p>
        </div>

        <!-- Latihan Soal -->
        <h2>H: Latihan Soal</h2>

        <div class="example-box">
            <h3>Latihan 1: Pilihan Ganda</h3>
            <p>Pilihlah jawaban yang benar untuk melengkapi kalimat di bawah ini.</p>
            <ol>
                <li>
                    Jane: "I don't think I will finish my project in time." <br>
                    Siti: "________ I help you with it?"
                    <ul>
                        <li><input type="radio" name="question1" value="a"> a. May</li>
                        <li><input type="radio" name="question1" value="b"> b. How about</li>
                        <li><input type="radio" name="question1" value="c"> c. Shall</li>
                        <li><input type="radio" name="question1" value="d"> d. Would you</li>
                    </ul>
                </li>
                <li>
                    John: "I am really hungry. __________ we grab some food?" <br>
                    Jane: "Good idea!"
                    <ul>
                        <li><input type="radio" name="question2" value="a"> a. How about</li>
                        <li><input type="radio" name="question2" value="b"> b. Why don't</li>
                        <li><input type="radio" name="question2" value="c"> c. Let’s</li>
                        <li><input type="radio" name="question2" value="d"> d. Would</li>
                    </ul>
                </li>
            </ol>
        </div>

        <div class="example-box">
            <h3>Latihan 2: Isian Singkat</h3>
            <p>Lengkapilah kalimat berikut ini dengan kata yang tepat:</p>
            <ol>
                <li>John: "I am bored. <input type="text" id="question3" placeholder=""> we watch a movie?"</li>
                <li>Jane: "<input type="text" id="question4" placeholder=""> we have lunch together this afternoon?"</li>
                <li>Siti: "How <input type="text" id="question5" placeholder=""> taking a walk in the park?"</li>
            </ol>
        </div>

        <div class="example-box">
            <h3>Latihan 3: Buat Kalimat</h3>
            <p>Buatlah kalimat saran atau tawaran berdasarkan situasi yang diberikan:</p>
            <ol>
                <li>Seseorang merasa lelah setelah bekerja seharian. Buat kalimat saran untuk beristirahat. <input type="text" id="question6" placeholder="Tuliskan kalimat"></li>
                <li>Teman Anda kesulitan memahami pelajaran. Buat kalimat tawaran untuk membantu. <input type="text" id="question7" placeholder="Tuliskan kalimat"></li>
            </ol>
        </div>

        <div class="example-box">
            <h3>Latihan 4: Pilih Kalimat yang Benar</h3>
            <p>Pilih kalimat yang merupakan contoh kalimat saran atau tawaran:</p>
            <ul>
                <li><input type="checkbox" name="question8" value="a"> a. Let's go to the beach.</li>
                <li><input type="checkbox" name="question8" value="b"> b. I think you should try again.</li>
                <li><input type="checkbox" name="question8" value="c"> c. I will finish it tomorrow.</li>
                <li><input type="checkbox" name="question8" value="d"> d. Would you like some coffee?</li>
            </ul>
        </div>

        <button class="periksa-jawaban" onclick="checkAnswers()">Periksa Jawaban</button>

        <p id="result"></p>

        <script>
            function checkAnswers() {
                // Jawaban benar
                let correctAnswers = {
                    question1: "c",
                    question2: "c",
                    question3: "Shall",
                    question4: "Shall",
                    question5: "about",
                    question8: ["a", "b", "d"]
                };

                // Pemeriksaan Pilihan Ganda
                let score = 0;
                let totalQuestions = 5;

                let q1 = document.querySelector('input[name="question1"]:checked');
                let q2 = document.querySelector('input[name="question2"]:checked');

                if (q1 && q1.value === correctAnswers.question1) score++;
                if (q2 && q2.value === correctAnswers.question2) score++;

                // Pemeriksaan Isian Singkat
                if (document.getElementById("question3").value.trim() === correctAnswers.question3) score++;
                if (document.getElementById("question4").value.trim() === correctAnswers.question4) score++;
                if (document.getElementById("question5").value.trim() === correctAnswers.question5) score++;

                // Pemeriksaan Checkbox
                let selectedCheckboxes = Array.from(document.querySelectorAll('input[name="question8"]:checked')).map(cb => cb.value);
                if (JSON.stringify(selectedCheckboxes.sort()) === JSON.stringify(correctAnswers.question8.sort())) score++;

                // Tampilkan hasil
                document.getElementById("result").innerText = `Skor Anda: ${score} dari ${totalQuestions}`;
            }
        </script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</div>


<div class="pagination">
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab1.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab1.page', ['page' => 3]) }}" class="btn active">3</a>
</div>
@endsection