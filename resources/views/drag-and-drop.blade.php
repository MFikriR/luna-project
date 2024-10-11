@extends('layouts.main')

@section('title', 'Drag and Drop')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #47B5FF;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 50px;
        }

        .drag-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .drag-item, .drop-zone {
            border: 2px solid #2980b9;
            border-radius: 8px;
            padding: 20px;
            width: 150px;
            min-height: 100px;
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
            color: #DFF6FF;
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
</head>
<body>

    <div class="container">
        <div class="content">
        </div>

        <h1>Drag and Drop Exercise</h1>
        <p>Drag the correct word to complete the sentence about self-description:</p>
        
        <p><strong>Sentence: I like to ____ in the park.</strong></p>

        <!-- Drop zones -->
        <div class="drag-container">
            <div class="drop-zone" id="drop1" ondrop="drop(event)" ondragover="allowDrop(event)">
                Drop Here
            </div>
        </div>

        <!-- Drag items -->
        <div class="drag-container" id="dragContainer">
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag1">run</div>
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag2">read</div>
            <div class="drag-item" draggable="true" ondragstart="drag(event)" id="drag3">play</div>
        </div>

        <p class="feedback" id="feedback" style="display:none; color: #e74c3c;"></p>
        <button class="reset-button" id="resetButton" style="display:none;" onclick="resetExercise()">Reset</button>
    </div>

    <script>
        let hasDropped = false; // Flag to check if an item has been dropped

        function allowDrop(ev) {
            ev.preventDefault();
            ev.target.classList.add('hover');
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            if (hasDropped) return; // Prevent dropping multiple items
            const data = ev.dataTransfer.getData("text");
            const droppedItem = document.getElementById(data);

            // Append item to drop zone
            ev.target.innerHTML = ""; // Clear existing content
            ev.target.appendChild(droppedItem);
            ev.target.classList.remove('hover');
            hasDropped = true;

            // Check if the answer is correct
            if (data === 'drag1') { // Assuming 'run' is the correct answer
                document.getElementById('feedback').innerText = "Correct! You like to run in the park.";
            } else {
                document.getElementById('feedback').innerText = "Try again!";
            }
            document.getElementById('feedback').style.display = 'block';
            document.getElementById('resetButton').style.display = 'inline-block'; // Show reset button
        }

        // Reset the exercise
        function resetExercise() {
            hasDropped = false; // Reset drop status
            document.querySelectorAll('.drop-zone').forEach(zone => {
                zone.innerHTML = 'Drop Here'; // Reset drop zone text
                zone.classList.remove('hover');
            });
            document.getElementById('feedback').style.display = 'none';
            document.getElementById('resetButton').style.display = 'none'; // Hide reset button

            // Move items back to original container and make them draggable again
            const items = document.querySelectorAll('.drag-item');
            items.forEach(item => {
                item.style.display = 'block'; // Ensure items are visible
                document.getElementById('dragContainer').appendChild(item); // Move items back
            });
        }

        // Remove hover class if no drop
        document.querySelectorAll('.drop-zone').forEach(zone => {
            zone.addEventListener('dragleave', function() {
                this.classList.remove('hover');
            });
        });
    </script>

    </script>
</body>
</html>
@endsection