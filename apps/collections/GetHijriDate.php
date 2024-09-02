<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gregorian to Hijri Date Converter</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #3498db 0%, #ffffff 100%);
      margin: 0;
      padding: 20px;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    h1 {
      text-align: center;
      color: black;
      margin-bottom: 20px;
    }
    #date-form {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
      color: black; 
    }
    input[type="number"] {
      padding: 10px;
      border: 2px solid #ffffff;
      border-radius: 5px;
      width: 80px;
      background-color: #ffffff;
    }
    button {
      padding: 10px 20px;
      background-color: #ffffff;
      color: black;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    button:hover {
      background-color: #e0e0e0;
    }
    #date-result {
      width: 100%;
      max-width: 800px;
      display: flex;
      justify-content: center;
      overflow-x: auto;
    }
    p {
      font-size: 1.2rem;
      margin: 10px 0;
    }
    @media (max-width: 600px) {
      input[type="number"] {
        width: 60px;
      }
      button {
        padding: 8px 15px;
      }
    }
  </style>
</head>
<body>
  <h1>Gregorian to Hijri Date Converter</h1>
  <form id="date-form">
    <label for="month">Month (MM):</label>
    <input type="number" id="month" name="month" min="1" max="12" required>
    <label for="day">Day (DD):</label>
    <input type="number" id="day" name="day" min="1" max="31" required>
    <label for="year">Year (YYYY):</label>
    <input type="number" id="year" name="year" required>
    <button type="submit">Get Hijri Date</button>
  </form>
  <div id="date-result"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const dateForm = document.getElementById('date-form');
      const dateResultDiv = document.getElementById('date-result');

      dateForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const month = document.getElementById('month').value.padStart(2, '0');
        const day = document.getElementById('day').value.padStart(2, '0');
        const year = document.getElementById('year').value;

        const gregorianDate = `${month}-${day}-${year}`;
        const apiUrl = `http://api.aladhan.com/v1/gToH/${gregorianDate}`;

        fetch(apiUrl)
          .then(response => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            console.log('API Response:', data); // Debugging: Log the API response
            if (data.code === 200 && data.data.hijri) {
              const hijriDate = data.data.hijri.date;
              dateResultDiv.innerHTML = `<p>Gregorian Date: ${month}-${day}-${year} corresponds to Hijri Date: ${hijriDate}</p>`;
            } else {
              dateResultDiv.innerHTML = 'Error: Unable to get Hijri Date';
            }
          })
          .catch(error => {
            console.error('Error fetching Hijri date:', error);
            dateResultDiv.innerHTML = `Error loading Hijri Date: ${error.message}`;
          });
      });
    });
  </script>
</body>
</html>
