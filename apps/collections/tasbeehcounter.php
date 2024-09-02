<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasbeeh Counter</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        General Styles
        body {
            font-family: 'Raleway', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
            transition: background-color 0.3s, color 0.3s;
        }

        .container {
            padding: 40px 15px;
        }

        .tasbeeh-counter {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            transition: background-color 0.3s, color 0.3s;
        }

        .tasbeeh-counter h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #3498db;
            margin-bottom: 20px;
        }

        .tasbeeh-counter .count-display {
            font-size: 3rem;
            margin: 20px 0;
            color: #3498db;
            font-weight: 700;
        }

        .tasbeeh-counter button {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-weight: 600;
        }

        .tasbeeh-counter button:hover {
            background: linear-gradient(135deg, #2980b9, #3498db);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .tasbeeh-counter .settings,
        .tasbeeh-counter .history {
            margin-top: 30px;
        }

        .tasbeeh-counter .settings input {
            margin: 5px;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .tasbeeh-counter .settings button {
            margin-top: 10px;
        }

        .progress-bar {
            height: 20px;
            margin: 20px 0;
            border-radius: 10px;
            background-color: #3498db;
        }

        .hidden {
            display: none;
        }

        .theme-light {
            background-color: #eef2f3;
            color: #333;
        }

        .theme-dark {
            background-color: #000;
            color: #fff;
        }

        .theme-blue {
            background-color: #eaf2f8;
            color: #333;
        }

        .dark-mode .tasbeeh-counter {
            background: #444;
            color: #fff;
        }

        .dark-mode .progress-bar {
            background-color: #3498db;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .tasbeeh-counter {
                padding: 20px;
            }

            .tasbeeh-counter h1 {
                font-size: 2rem;
            }

            .tasbeeh-counter .count-display {
                font-size: 2.5rem;
            }

            .tasbeeh-counter button {
                font-size: 0.9rem;
                padding: 10px 20px;
            }

            .tasbeeh-counter .settings input {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="tasbeeh-counter" id="counterSection">
            <h1>Tasbeeh Counter</h1>
            <div class="count-display" id="countDisplay">0</div>
            <button id="countButton">Increase Count</button>
            <button id="resetButton">Reset Count</button>

            <div class="settings">
                <!-- <h3>Options</h3> -->
                <label for="countGoal">Set Goal:</label>
                <input type="number" id="countGoal" placeholder="Enter goal count">
                <button id="setGoalButton">Set Goal</button>
                <p id="goalDisplay"></p>
                <div class="progress-bar hidden" id="progressBar"></div>
                <label for="themeSelector">Select Theme:</label>
                <select id="themeSelector">
                    <option value="theme-light">Light</option>
                    <option value="theme-dark">Dark</option>
                    <option value="theme-blue">Blue</option>
                </select>
                <button id="toggleDarkMode">Toggle Dark Mode</button>
                <button id="showHistory">Show Full History</button>
            </div>

            <div class="history hidden">
                <h3>History</h3>
                <ul id="historyList"></ul>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const countButton = document.getElementById('countButton');
        const resetButton = document.getElementById('resetButton');
        const setGoalButton = document.getElementById('setGoalButton');
        const countDisplay = document.getElementById('countDisplay');
        const countGoalInput = document.getElementById('countGoal');
        const goalDisplay = document.getElementById('goalDisplay');
        const progressBar = document.getElementById('progressBar');
        const historyList = document.getElementById('historyList');
        const themeSelector = document.getElementById('themeSelector');
        const toggleDarkMode = document.getElementById('toggleDarkMode');
        const showHistoryButton = document.getElementById('showHistory');
        const historySection = document.querySelector('.history');

        let count = parseInt(localStorage.getItem('count') || '0', 10);
        let goal = parseInt(localStorage.getItem('goal') || 'null', 10);
        let theme = localStorage.getItem('theme') || 'theme-light';
        let isDarkMode = localStorage.getItem('darkMode') === 'true';

        function updateDisplay() {
            countDisplay.textContent = count;
            if (goal !== null && count >= goal) {
                goalDisplay.textContent = 'Goal Reached!';
            } else if (goal !== null) {
                goalDisplay.textContent = 'Goal: ' + goal;
                progressBar.classList.remove('hidden'); 
            } else {
                goalDisplay.textContent = '';
                progressBar.classList.add('hidden'); 
            }
            updateProgressBar();
            saveHistory();
        }

        function updateProgressBar() {
            if (goal !== null) {
                const percentage = (count / goal) * 100;
                progressBar.style.width = percentage + '%';
            } else {
                progressBar.style.width = '0%';
            }
        }

        function saveHistory() {
            let history = JSON.parse(localStorage.getItem('history')) || [];
            history.push({ count, date: new Date().toLocaleString() });
            if (history.length > 10) history.shift();
            localStorage.setItem('history', JSON.stringify(history));
            renderHistory();
        }

        function renderHistory() {
            let history = JSON.parse(localStorage.getItem('history')) || [];
            historyList.innerHTML = history.map(entry => `<li>${entry.date}: ${entry.count}</li>`).join('');
        }

        function applyTheme() {
            document.body.className = theme;
            localStorage.setItem('theme', theme);
        }

        function toggleDarkModeClass() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        }

        // Initialize display and theme
        updateDisplay();
        renderHistory();
        applyTheme();
        if (isDarkMode) {
            document.body.classList.add('dark-mode');
        }

        countButton.addEventListener('click', function () {
            count++;
            localStorage.setItem('count', count);
            updateDisplay();
        });

        resetButton.addEventListener('click', function () {
            count = 0;
            localStorage.setItem('count', count);
            updateDisplay();
        });

        setGoalButton.addEventListener('click', function () {
            goal = parseInt(countGoalInput.value, 10);
            if (isNaN(goal)) {
                goalDisplay.textContent = 'Please enter a valid number.';
            } else {
                localStorage.setItem('goal', goal);
                updateDisplay();
            }
        });

        themeSelector.addEventListener('change', function () {
            theme = themeSelector.value;
            applyTheme();
        });

        toggleDarkMode.addEventListener('click', toggleDarkModeClass);

        showHistoryButton.addEventListener('click', function () {
            historySection.classList.toggle('hidden');
            if (historySection.classList.contains('hidden')) {
                showHistoryButton.textContent = 'Show Full History';
            } else {
                showHistoryButton.textContent = 'Hide History';
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>