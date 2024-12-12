@extends('layouts.materilayout')
@section('title', 'Bab 3: Party Time')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <h2>H: Latihan Soal</h2>
            <div class="example-box">
                <h3>Bacaan Pendahuluan</h3>
                <p>Berikut ini adalah teks bacaan yang dapat membantu Anda memahami materi dan menjawab soal latihan:</p>
                <p>
                    "Party time" adalah istilah yang digunakan untuk menggambarkan perayaan atau acara sosial di mana orang-orang berkumpul untuk bersenang-senang. Dalam sebuah pesta, elemen-elemen penting seperti waktu, lokasi, tema, undangan, dan makanan sangat penting untuk menciptakan suasana yang menyenangkan. Contoh frasa yang sering digunakan terkait pesta meliputi "Let's throw a party", "You're invited", "Dress code", dan "RSVP" (respondez s'il vous plaît) yang berarti "Harap konfirmasi kehadiran Anda".
                </p>
            </div>

            <div class="example-box">
                <h3>Latihan 1: Pilihan Ganda</h3>
                <p>Pilihlah jawaban yang benar untuk melengkapi kalimat di bawah ini.</p>
                <ol>
                    <li>
                        The phrase "RSVP" in a party invitation means ________. <br>
                        <ul>
                            <li><input type="radio" name="question1" value="a"> a. Bring a gift</li>
                            <li><input type="radio" name="question1" value="b"> b. Confirm your attendance</li>
                            <li><input type="radio" name="question1" value="c"> c. Follow the dress code</li>
                            <li><input type="radio" name="question1" value="d"> d. Host the party</li>
                        </ul>
                    </li>
                    <li>
                        What is the main purpose of a party invitation? <br>
                        <ul>
                            <li><input type="radio" name="question2" value="a"> a. To provide information about the event</li>
                            <li><input type="radio" name="question2" value="b"> b. To decorate the venue</li>
                            <li><input type="radio" name="question2" value="c"> c. To serve food and drinks</li>
                            <li><input type="radio" name="question2" value="d"> d. To prepare the music playlist</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 2: Isian Singkat</h3>
                <p>Lengkapilah kalimat berikut ini dengan kata yang tepat:</p>
                <ol>
                    <li>The party will start at __________. <br>
                        <input type="text" id="question3" placeholder="Jawaban Anda">
                    </li>
                    <li>The theme of the party is __________. <br>
                        <input type="text" id="question4" placeholder="Jawaban Anda">
                    </li>
                    <li>Please __________ if you can attend the party by this Friday. <br>
                        <input type="text" id="question5" placeholder="Jawaban Anda">
                    </li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 3: Buat Kalimat</h3>
                <p>Buatlah undangan pesta dengan menggunakan format undangan resmi:</p>
                <textarea id="question6" placeholder="Tuliskan undangan di sini" rows="4" style="width: 100%;"></textarea>
            </div>

            <div class="example-box">
                <h3>Latihan 4: Pilih Elemen yang Tepat</h3>
                <p>Pilih elemen yang seharusnya ada dalam sebuah undangan pesta:</p>
                <ul>
                    <li><input type="checkbox" name="question8" value="a"> a. Date and time</li>
                    <li><input type="checkbox" name="question8" value="b"> b. Host's name</li>
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
                        question1: "b",
                        question2: "a",
                        question3: "7:00 PM",
                        question4: "Masquerade",
                        question5: "RSVP",
                        question8: ["a", "b", "d"]
                    };

                    // Pemeriksaan Pilihan Ganda
                    let score = 0;
                    let totalQuestions = 6;

                    let q1 = document.querySelector('input[name="question1"]:checked');
                    let q2 = document.querySelector('input[name="question2"]:checked');

                    if (q1 && q1.value === correctAnswers.question1) score++;
                    if (q2 && q2.value === correctAnswers.question2) score++;

                    // Pemeriksaan Isian Singkat
                    if (document.getElementById("question3").value.trim().toLowerCase() === correctAnswers.question3.toLowerCase()) score++;
                    if (document.getElementById("question4").value.trim().toLowerCase() === correctAnswers.question4.toLowerCase()) score++;
                    if (document.getElementById("question5").value.trim().toLowerCase() === correctAnswers.question5.toLowerCase()) score++;

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