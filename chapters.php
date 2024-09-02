<?php
if (isset($_POST["bookSlug"])) {
    $bookslug = $_POST["bookSlug"];
    $response = file_get_contents('https://hadithapi.com/api/' . $bookslug . '/chapters?apiKey=$2y$10$BylaBcXs5Lw7ZOtYmQ3PXO1x15zpp26oc1FeGktdmF6YeYoRd88e');
    $response = json_decode($response, true);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hadith Chapters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        body {
            /* direction: rtl; */
            background: linear-gradient(to bottom, #e0f7fa, #b3e5fc);
            font-family: 'Amiri Quran', serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 auto;
            padding: 20px;
            max-width: 1200px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 1px solid #01579b;
        }

        .arabic1 {
            font-family: 'jameel', serif;
            background-color: black;
            border-radius: 15px;
            padding: 20px;
            color: white;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @font-face {
            font-family: "jameel";
            src: url(fonts/jameel.ttf);
        }

        .card {
            border: none;
            background: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card-body {
            text-align: center;
            padding: 20px;
            background: #e0f7fa;
            border-radius: 10px;
        }

        .card-title {
            font-size: 1rem;
            color: #0288d1;
            margin: 10px 0;
        }

        .card-text {
            color: #01579b;
            font-size: 1rem;
        }

        .btn-custom {
    background-color: #005f99;
    border: none;
    color: #ffffff;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin-top: 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
    width: 100%; /* Button takes full width within the card */
    max-width: 250px; /* Maximum width of the button */
    margin: 0 auto; /* Center the button */
    display: flex; /* Use flexbox to center text */
    justify-content: center; /* Horizontally center the text */
    align-items: center; /* Vertically center the text */
}



        .btn-custom:hover {
            background-color: #003f66;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 15px;
            }

            .card-title {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mb-4">
        <h1 class="arabic1">ابواب الاحادیث</h1>
        <div class="row">
            <?php
            if (isset($response["chapters"])) {
                foreach ($response["chapters"] as $value) {
                    echo '
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">' . $value["chapterNumber"] . '</h5>
                                <p class="arabic card-text">' . $value["chapterArabic"] . '</p>
                                <p class="urdu card-text">' . $value["chapterUrdu"] . '</p>
                                <p class="english card-text">' . $value["chapterEnglish"] . '</p>
                                <form action="hadith.php" method="post">
                                    <input type="hidden" name="bookSlug" value="' . $value["bookSlug"] . '">
                                    <input type="hidden" name="chapterNumber" value="' . $value["chapterNumber"] . '">
                                    <input type="hidden" name="chapterUrdu" value="' . $value["chapterUrdu"] . '">
                                    <input type="hidden" name="chapterEnglish" value="' . $value["chapterEnglish"] . '">
                                    <input type="hidden" name="chapterArabic" value="' . $value["chapterArabic"] . '">
                                    <button type="submit" class="btn btn-custom">Read Hadith</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
