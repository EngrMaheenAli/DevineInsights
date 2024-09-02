<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasbeeh Counter</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #ffffff; /* Light text color for dark mode */
            text-align: center;
            user-select: none; /* Prevent text selection */
        }
        .counter-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            background: url('../assets/img/services-2.jpg') no-repeat center center;
            background-size: cover;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            margin: 0;
            position: relative;
        }
        .count-display {
            font-size: 5em; /* Larger font size for better visibility */
            margin: 20px 0;
            font-weight: bold;
            z-index: 1; /* Ensure text is above the background */
        }
        button {
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            background: #2980b9;
            cursor: pointer;
            margin: 10px;
            font-size: 1.5em; /* Larger font size for buttons */
            z-index: 1; /* Ensure buttons are above the background */
        }
        button:hover {
            background: #2980b9; /* Slightly darker shade on hover */
        }
        .reset-button {
            background: #e74c3c; /* Different color for the reset button */
        }
        .reset-button:hover {
            background: #c0392b; /* Slightly darker shade on hover */
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            transition: opacity 0.5s ease; /* Smooth transition for overlay */
            z-index: 0; /* Overlay behind the content */
        }
    </style>
</head>
<body>
    <div class="counter-container" id="counterContainer">
        <div class="overlay" id="overlay"></div>
        <h1>Tasbeeh Counter</h1>
        <div class="count-display" id="countDisplay">0</div>
        <button id="resetButton" class="reset-button">Reset</button>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const resetButton = document.getElementById('resetButton');
            const countDisplay = document.getElementById('countDisplay');
            const counterContainer = document.getElementById('counterContainer');
            const overlay = document.getElementById('overlay');

            // Retrieve the count from localStorage or set to 0 if not available
            let count = parseInt(localStorage.getItem('count'), 10);
            if (isNaN(count)) count = 0;

            function updateDisplay() {
                countDisplay.textContent = count;
                localStorage.setItem('count', count);

                // Calculate the opacity of the overlay based on the count
                const opacity = Math.min(count / 100, 1); // Ensure opacity is between 0 and 1
                overlay.style.opacity = 1 - opacity; // Inverse to make image more visible with higher count

                console.log('Updated display to:', count); // Debugging
            }

            // Increment count on any click on the body
            document.body.addEventListener('click', function (event) {
                // Ensure clicks on the reset button do not increment the counter
                if (event.target.id !== 'resetButton') {
                    count++;
                    updateDisplay();
                }
            });

            // Reset count when the reset button is clicked
            resetButton.addEventListener('click', function () {
                console.log('Reset button clicked'); // Debugging
                count = 0;
                localStorage.setItem('count', '0'); // Ensure localStorage is set to 0
                updateDisplay();
            });

            updateDisplay();
        });
    </script>
</body>
</html>
