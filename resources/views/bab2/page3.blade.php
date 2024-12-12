@extends('layouts.materilayout')
@section('title', 'Bab 2: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <h2>H: Latihan Soal</h2>
            <div class="example-box">
                <h3>Latihan 1: Pilihan Ganda</h3>
                <p>Pilihlah jawaban yang benar untuk melengkapi kalimat di bawah ini.</p>
                <ol>
                    <li>
                        Jane: "In my opinion, social media has a negative impact on teenagers." <br>
                        Siti: "________ I understand why you feel that way, but I think it also has positive effects."
                        <ul>
                            <li><input type="radio" name="question1" value="a"> a. Since</li>
                            <li><input type="radio" name="question1" value="b"> b. Although</li>
                            <li><input type="radio" name="question1" value="c"> c. Even if</li>
                            <li><input type="radio" name="question1" value="d"> d. Because</li>
                        </ul>
                    </li>
                    <li>
                        John: "I believe exams are not the best way to evaluate students." <br>
                        Jane: "________ I think exams can be useful, they should not be the only assessment method."
                        <ul>
                            <li><input type="radio" name="question2" value="a"> a. Although</li>
                            <li><input type="radio" name="question2" value="b"> b. In contrast</li>
                            <li><input type="radio" name="question2" value="c"> c. As for</li>
                            <li><input type="radio" name="question2" value="d"> d. For</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 2: Isian Singkat</h3>
                <p>Lengkapilah kalimat berikut ini dengan kata yang tepat:</p>
                <ol>
                    <li>John: "________ I understand it, exams can be stressful but also helpful." <br>
                        <input type="text" id="question3" placeholder="Jawaban Anda">
                    </li>
                    <li>Jane: "As far as I am __________, technology has both benefits and drawbacks." <br>
                        <input type="text" id="question4" placeholder="Jawaban Anda">
                    </li>
                    <li>Siti: "I __________ believe that everyone has the right to express their opinion." <br>
                        <input type="text" id="question5" placeholder="Jawaban Anda">
                    </li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 3: Buat Kalimat</h3>
                <p>Buatlah kalimat opini atau pendapat berdasarkan situasi yang diberikan:</p>
                <ol>
                    <li>Seseorang bertanya tentang pendapat Anda mengenai penggunaan internet di sekolah. <br>
                        <input type="text" id="question6" placeholder="Tuliskan opini Anda">
                    </li>
                    <li>Teman Anda merasa bahwa membaca buku adalah cara terbaik untuk belajar. Bagaimana pendapat Anda? <br>
                        <input type="text" id="question7" placeholder="Tuliskan opini Anda">
                    </li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 4: Pilih Kalimat yang Mengungkapkan Pendapat</h3>
                <p>Pilih kalimat yang merupakan contoh ungkapan pendapat atau pemikiran:</p>
                <ul>
                    <li><input type="checkbox" name="question8" value="a"> a. I believe that exercise is essential for health.</li>
                    <li><input type="checkbox" name="question8" value="b"> b. I suggest we go to the gym together.</li>
                    <li><input type="checkbox" name="question8" value="c"> c. In my opinion, watching documentaries is informative.</li>
                    <li><input type="checkbox" name="question8" value="d"> d. Could you help me with this assignment?</li>
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
                        question3: "As",
                        question4: "concerned",
                        question5: "strongly",
                        question8: ["a", "c"]
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
    <a href="{{ route('bab2.page', ['page' => 2]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab2.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab2.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab2.page', ['page' => 3]) }}" class="btn active">3</a>
</div>

@endsection