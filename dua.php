<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duas Collection</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Noto Sans', sans-serif;
            background-color: #f3f4f6;
        }

        .header {
            text-align: center;
            padding: 30px 0;
            background-color: #3aafa9;
            color: #ffffff;
            font-size: 2rem;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .dua-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .dua-card:hover {
            transform: scale(1.05);
        }

        .dua-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .dua-title-urdu {
            font-family: 'Noto Nastaliq Urdu', serif;
            font-size: 1.2rem;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="header">Duas Collection</div>

    <div class="container">
        <!-- Example of a Dua Card -->
        <div class="dua-card">
            <div class="dua-title">Morning Dua</div>
            <div class="dua-title-urdu">صبح کی دعا</div>
        </div>

        <!-- Repeat Dua Cards for 20 Duas -->
        <!-- Add more cards as per your requirement -->
    </div>

</body>
</html>
