@extends('layouts.materilayout')
@section('title', 'Bab 3: Party Time')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <h2>C: Latihan Soal</h2>
        <div class="example-box">
            <h3>Latihan 1: Pilihan Ganda</h3>
            <p>Pilihlah jawaban yang benar untuk melengkapi undangan di bawah ini.</p>
            <ol>
                <li>
                    What is missing from the invitation below? <br>
                    <ul>
                        <li><input type="radio" name="question1" value="a"> a. Name of the host</li>
                        <li><input type="radio" name="question1" value="b"> b. Location</li>
                        <li><input type="radio" name="question1" value="c"> c. Time</li>
                        <li><input type="radio" name="question1" value="d"> d. All of the above</li>
                    </ul>
                </li>
                <li>
                    What type of party is it? <br>
                    <ul>
                        <li><input type="radio" name="question2" value="a"> a. Wedding party</li>
                        <li><input type="radio" name="question2" value="b"> b. Birthday party</li>
                        <li><input type="radio" name="question2" value="c"> c. Formal gathering</li>
                        <li><input type="radio" name="question2" value="d"> d. Graduation party</li>
                    </ul>
                </li>
            </ol>
        </div>

        <div class="example-box">
            <h3>Latihan 2: Isian Singkat</h3>
            <p>Lengkapilah bagian yang hilang pada undangan:</p>
            <ol>
                <li>The event will be held at <input type="text" id="question3" placeholder="Location"> on the 27th of December.</li>
                <li>Time of the event: <input type="text" id="question4" placeholder="Time"></li>
                <li>Dress code: <input type="text" id="question5" placeholder="Dress code"></li>
            </ol>
        </div>

        <div class="example-box">
            <h3>Latihan 3: Buat Kalimat</h3>
            <p>Buatlah undangan untuk acara formal dengan menggunakan format undangan:</p>
            <textarea id="question6" placeholder="Tuliskan undangan di sini" rows="4" style="width: 100%;"></textarea>
        </div>

        <div class="example-box">
            <h3>Latihan 4: Pilih Elemen yang Tepat</h3>
            <p>Pilih elemen yang seharusnya ada dalam undangan:</p>
            <ul>
                <li><input type="checkbox" name="question8" value="a"> a. Host name</li>
                <li><input type="checkbox" name="question8" value="b"> b. Date and time</li>
                <li><input type="checkbox" name="question8" value="c"> c. Food menu</li>
                <li><input type="checkbox" name="question8" value="d"> d. RSVP</li>
            </ul>
        </div>

        <button onclick="checkAnswers()">Periksa Jawaban</button>

        <p id="result"></p>

        <script>
            function checkAnswers() {
                // Jawaban benar
                let correctAnswers = {
                    question1: "d",
                    question2: "c",
                    question3: "Gedung Subarno Jakarta",
                    question4: "7:00 PM",
                    question5: "Formal",
                    question8: ["a", "b", "d"]
                };

                // Pemeriksaan Pilihan Ganda
                let score = 0;
                let totalQuestions = 7;

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
    <a href="{{ route('bab3.page', ['page' => 2]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab3.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab3.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab3.page', ['page' => 3]) }}" class="btn active">3</a></div>

@endsection