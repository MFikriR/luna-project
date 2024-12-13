@extends('layouts.gameslayout')
@section('title', 'Drag and Drop')
@section('content')
<style>
    body {
        background-color: white;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .container {
        text-align: center;
        padding: 50px;
        flex-grow: 1;
        max-width: 600px;
        margin: auto;
    }

    .drag-container {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .drag-item, .drop-zone {
        border: 2px solid #2980b9;
        border-radius: 8px;
        padding: 70px;
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        background-color: #f1f1f1;
        transition: background-color 0.3s;
    }

    .drag-item {
        cursor: grab;
        background-color: #DFF6FF;
        color: black;
        font-weight: bold;
    }

    .drop-zone {
        background-color: #ecf0f1;
    }

    .drop-zone.hover {
        background-color: #bdc3c7;
    }

    h1 {
        color: #4396b8;
        font-weight: bold;
    }

    p {
        font-size: 18px;
        margin: 10px 0;
    }

    .reset-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #e74c3c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .reset-button:hover {
        background-color: #c0392b;
    }
</style>
<div class="container">
    <div class="content">
        <h1>Interactive Drag and Drop Game</h1>
        <p>Complete the sentences by dragging the correct word into the blank space!</p>

        <!-- Sentences with drop zones -->
        <div class="question" style="display: flex; justify-content: space-between;">
            <div class="question">
                <p><strong>1. I like to ____ in the park.</strong></p>
                <div class="drag-container">
                    <div class="drop-zone" id="drop1" ondrop="drop(event, 1)" ondragover="allowDrop(event)">Drop Here</div>
                </div>
            </div>

            <div class="question">
                <p><strong>2. I enjoy ____ books.</strong></p>
                <div class="drag-container">
                    <div class="drop-zone" id="drop2" ondrop="drop(event, 2)" ondragover="allowDrop(event)">Drop Here</div>
                </div>
            </div>

            <div class="question">
                <p><strong>3. My hobby is to ____ music.</strong></p>
                <div class="drag-container">
                    <div class="drop-zone" id="drop3" ondrop="drop(event, 3)" ondragover="allowDrop(event)">Drop Here</div>
                </div>
            </div>
        </div>

        <!-- Drag items -->
        <div class="drag-container" id="dragContainer">
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag1">run</div>
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag2">read</div>
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag3">listen</div>
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag4">cook</div>
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag5">draw</div>
        </div>

        <!-- Feedback -->
        <p class="feedback" id="feedback" style="display:none; color: #e74c3c;"></p>
        
        <!-- Button to check answers -->
        <button class="reset-button" id="checkButton" onclick="checkAnswers()">Periksa</button>
        
        <!-- Reset button -->
        <button class="reset-button" id="resetButton" onclick="resetExercise()">Reset</button>

    </div>
</div>


<style>
.scrollable {
    max-height: 150px;
    overflow-y: auto;
    border: 1px solid #ccc;
    padding: 10px;
}
.hover {
    background-color: #f0f8ff;
}

.questions {
    display: flex;
    justify-content: space-around;
    gap: 20px;
}

.question {
    flex: 1;
    text-align: center;
}
</style>

<script>
    let correctAnswers = {
    drop1: "drag1", // "run"
    drop2: "drag2", // "read"
    drop3: "drag3"  // "listen"
    };
    let hasDropped = { drop1: false, drop2: false, drop3: false };
    let totalScore = 0;

    function allowDrop(ev) {
        ev.preventDefault();
        ev.target.classList.add('hover');
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev, questionNumber) {
        ev.preventDefault();

        const dropId = `drop${questionNumber}`;
        if (hasDropped[dropId]) return; // Mencegah drop berulang di zona yang sama

        const data = ev.dataTransfer.getData("text");
        const droppedItem = document.getElementById(data);

        // Menambahkan item ke zona drop
        ev.target.innerHTML = ""; // Menghapus konten yang ada
        ev.target.appendChild(droppedItem);
        ev.target.classList.remove('hover');
        hasDropped[dropId] = true;

        // Menampilkan tombol periksa jika semua drop zone sudah terisi
        if (Object.values(hasDropped).every(v => v === true)) {
            document.getElementById('checkButton').style.display = 'inline-block';
        }
    }

    function checkAnswers() {
        totalScore = 0;
        let feedbackText = "";
        
        // Periksa setiap jawaban
        Object.keys(correctAnswers).forEach(dropId => {
            const droppedItem = document.getElementById(correctAnswers[dropId]);
            const dropZone = document.getElementById(dropId);

            if (droppedItem && dropZone.contains(droppedItem)) {
                feedbackText += `Jawaban untuk ${dropId}: Benar!\n`;
                totalScore++;
            } else {
                feedbackText += `Jawaban untuk ${dropId}: Salah!\n`;
            }
        });

        // Tampilkan hasil
        document.getElementById('feedback').innerText = feedbackText + `Nilai Anda: ${totalScore} dari 3`;
        document.getElementById('feedback').style.display = 'block';
    }

    function resetExercise() {
        // Mengatur ulang status zona drop
        Object.keys(hasDropped).forEach(key => {
            hasDropped[key] = false; // Reset status drop zone
        });

        // Mengembalikan semua item ke drag container
        document.querySelectorAll('.drop-zone').forEach(zone => {
            // Mengembalikan item ke container asalnya jika ada
            if (zone.children.length > 0) {
                const droppedItem = zone.children[0];
                document.getElementById('dragContainer').appendChild(droppedItem);
            }
            // Menghapus konten di drop zone
            zone.innerHTML = 'Drop Here';
            zone.classList.remove('hover');
        });

        // Menyembunyikan feedback
        document.getElementById('feedback').style.display = 'none';

        // Menampilkan kembali item drag (jika diperlukan)
        const items = document.querySelectorAll('.drag-item');
        items.forEach(item => {
            item.style.display = ''; // Mengatur kembali visibilitas item
        });

        // Reset juga feedback status atau nilai yang terkait
        document.getElementById('checkButton').style.display = 'inline-block'; // Pastikan tombol Periksa terlihat kembali
    }


    // Menghapus kelas hover jika tidak ada drop
    document.querySelectorAll('.drop-zone').forEach(zone => {
        zone.addEventListener('dragleave', function() {
            this.classList.remove('hover');
        });
    });

</script>

@endsection