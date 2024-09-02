<?php
// Function to fetch prayer times for a specific month
function fetchPrayerTimes($year, $month) {
    $latitude = 24.906232697185235;
    $longitude = 67.08000914379674;
    $method = 1; // Calculation method ( - University of Islamic Sciences, Karachi)

    // API URL for the specific month
    $url = "https://api.aladhan.com/v1/calendar/$year/$month?latitude=$latitude&longitude=$longitude&method=$method";

    // Fetching the data from the API
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Extracting prayer times
    $prayer_times = [];
    foreach ($data['data'] as $day) {
        $date = $day['date']['gregorian']['date'];
        $times = $day['timings'];
        $prayer_times[$date] = [
            'Fajr' => $times['Fajr'],
            'Dhuhr' => $times['Dhuhr'],
            'Asr' => $times['Asr'],
            'Maghrib' => $times['Maghrib'],
            'Isha' => $times['Isha'],
        ];
    }

    return $prayer_times;
}

// Handle month selection
$selected_month = isset($_POST['month']) ? intval($_POST['month']) : date('n');
$prayer_times = fetchPrayerTimes(2024, $selected_month);

// Generate month name
$month_name = date("F", mktime(0, 0, 0, $selected_month, 10));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Times Calendar</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Amiri', serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 1.2rem;
            color: #333;
        }
        select {
            font-size: 1.1rem;
            padding: 8px;
            margin-left: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: #fff;
            font-size: 1.1rem;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #e8f0fa;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Prayer Times for <?php echo $month_name; ?> 2024</h1>

    <!-- Dropdown Form -->
    <form method="post" action="index.php">
        <label for="month">Select Month:</label>
        <select id="month" name="month" onchange="this.form.submit()">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                $month_name = date("F", mktime(0, 0, 0, $i, 10));
                echo "<option value=\"$i\"" . ($i == $selected_month ? " selected" : "") . ">$month_name</option>";
            }
            ?>
        </select>
    </form>

    <!-- Prayer Times Table -->
    <table>
        <tr>
            <th>Date</th>
            <th>Fajr</th>
            <th>Dhuhr</th>
            <th>Asr</th>
            <th>Maghrib</th>
            <th>Isha</th>
        </tr>
        <?php
        foreach ($prayer_times as $date => $times) {
            echo "<tr>";
            echo "<td>$date</td>";
            echo "<td>{$times['Fajr']}</td>";
            echo "<td>{$times['Dhuhr']}</td>";
            echo "<td>{$times['Asr']}</td>";
            echo "<td>{$times['Maghrib']}</td>";
            echo "<td>{$times['Isha']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
