<?php

$response = file_get_contents('https://hadithapi.com/api/books?apiKey=$2y$10$BylaBcXs5Lw7ZOtYmQ3PXO1x15zpp26oc1FeGktdmF6YeYoRd88e');
$response = json_decode($response, true);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hadith Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
    body {
        background-color: #d6ecf9;
        font-family: 'Arial', 'sans-serif';
        margin: 0;
        padding: 0;
    }

    .arabic {
        font-family: 'jameel', serif;
        font-size: 1.4em;
        color: #222222;
    }

    @font-face {
        font-family: "jameel";
        src: url(fonts/jameel.ttf);
    }

    .arabic1 {
        text-align: center;
        font-family: 'jameel', serif;
        background-color: black;
        border-radius: 20px;
        padding: 20px;
        color: white;
        font-size: 2em;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 30px;
        margin-top: 30px;
    }

    .card {
        background-color: #389bde;
        border: 2px solid black;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        color: #ffffff;
        box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center; /* Center all text within the card */
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.3);
    }

    .card h3 {
        margin-bottom: 15px;
        color: #ffffff;
        font-size: 1.6em;
        font-weight: bold;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }

    .card p {
        color: #ffffff;
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .btn-custom {
        background-color: #ffffff;
        border: none;
        color: black;
        padding: 14px 28px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin-top: 20px;
        border-radius: 10px;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15);
        width: 100%; /* Button takes full width within the card */
        max-width: 250px; /* Maximum width of the button */
        margin: 20px auto 0 auto; /* Center the button */
    }

    .btn-custom:hover {
        background-color: #e0f3ff;
        color: #005f99;
        transform: translateY(-3px);
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
    }
</style>


 
</head>

<body>

<?php include 'navbar.php'; ?>

    <div class="container">
        <h1 class="arabic1">کتب الاحادیث</h1>
        <div class="row">
            <?php
            $hadithBooks = [
                "📖 صحيح البخاري",
                "📖 صحيح مسلم",
                "📖 جامع الترمذي",
                "📖 سنن أبي داود",
                "📖 سنن ابن ماجه",
                "📖 سنن النسائي",
                "📖 مشكاة المصابيح",
                "📖 مسند أحمد",
                "📖 السلسلة الصحيحة"
            ];

            foreach ($response["books"] as $key => $value) {
                echo '
                <div class="col-md-4 col-sm-6 mb-4"> <!-- Adjusted margin-bottom for better spacing -->
                    <div class="card">
                        <h3 class="arabic">' . ($key + 1) . ' - ' . $hadithBooks[$key]  . '</h3>
                        <p>' . $value["writerName"] . ' | ' . $value["writerDeath"] . '</p>
                        <p>Chapters: ' . $value["chapters_count"] . '  |  Hadiths: ' . $value["hadiths_count"] . '</p>
                        <form action="chapters.php" method="post">
                            <input type="hidden" name="bookSlug" value="' . $value["bookSlug"] . '">
                            <button type="submit" class="btn btn-custom">View Chapters</button>
                        </form>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
