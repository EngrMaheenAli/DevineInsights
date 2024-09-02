<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hijri Calendar</title>
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
    #calendar-form {
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
      width: 60px;
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
    #calendar {
      width: 100%;
      max-width: 800px;
      display: flex;
      justify-content: center;
      overflow-x: auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background-color: #0056b3;
      color: white;
    }
    td {
      background-color: #f0f8ff;
    }
    @media (max-width: 600px) {
      input[type="number"] {
        width: 50px;
      }
      button {
        padding: 8px 15px;
      }
    }
  </style>
</head>
<body>
  <h1>Hijri Calendar</h1>
  <form id="calendar-form">
    <label for="month">Month (1-12):</label>
    <input type="number" id="month" name="month" min="1" max="12" required>
    <label for="year">Year:</label>
    <input type="number" id="year" name="year" required>
    <button type="submit">Get Hijri Calendar</button>
  </form>
  <div id="calendar"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const form = document.getElementById('calendar-form');
      const calendarDiv = document.getElementById('calendar');

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        const month = document.getElementById('month').value;
        const year = document.getElementById('year').value;

        fetch(`http://api.aladhan.com/v1/gToHCalendar/${month}/${year}`)
          .then(response => response.json())
          .then(data => {
            const hijriDates = data.data;
            let table = '<table><tr><th>Gregorian Date</th><th>Hijri Date</th></tr>';

            hijriDates.forEach(day => {
              table += `<tr><td>${day.gregorian.date}</td><td>${day.hijri.date}</td></tr>`;
            });

            table += '</table>';
            calendarDiv.innerHTML = table;
          })
          .catch(error => {
            console.error('Error fetching Hijri calendar:', error);
            calendarDiv.innerHTML = 'Error loading Hijri Calendar';
          });
      });
    });
  </script>
</body>
</html>
