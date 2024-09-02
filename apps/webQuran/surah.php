<?php
$response = file_get_contents('http://api.alquran.cloud/v1/edition/language');
$response = json_decode($response, true);
$surahindex = $response["data"];

$indexsh = isset($_GET['index']) ? $_GET['index'] : 0;

$completeQuran = file_get_contents('https://api.alquran.cloud/v1/surah/' . $indexsh);
$completeQuran = json_decode($completeQuran, true);

$cQuran = $completeQuran["data"]["ayahs"];
// Ensure the index is within the bounds of the array
if ($indexsh >= 0 && $indexsh <= 114) {
    $surah = $indexsh;
} else {
    // Handle the case where the index is out of bounds
    echo "Invalid index";
    exit;
}
?>

<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mushaf</title>
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        body {
            direction: rtl;
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

        .select-container {
            position: relative;
            width: 100%;
            margin-bottom: 15px;

        }

        #languageSelect {
            padding-right: 30px;
            padding-bottom: 20px;
            font-size: large;
        }

        #languageData {
            padding-right: 30px;
            padding-bottom: 20px;
            font-size: large;
        }

        .select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 2px solid #4999d7;
            background-color: #e1f5fe;
            font-size: 16px;
            color: #0277bd;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .select:focus {
            outline: none;
            border-color: #01579b;
            box-shadow: 0 0 10px rgba(1, 87, 155, 0.5);
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

        .card-text {
            color: #01579b;
            font-size: 1rem;
        }

        .card-title {
            font-size: 1.5rem;
            color: #0288d1;
            margin: 10px 0;
            font-family: 'Amiri Quran', serif;
        }

        .row {
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
        }

        .col-md-12,
        .col-sm-12 {
            padding: 15px;
            box-sizing: border-box;
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

    <?php
    $languages = [
        'Arabic',
        'Amharic',
        'Azerbaijani',
        'Berber',
        'Bengali',
        'Czech',
        'German',
        'Dhivehi',
        'English',
        'Spanish',
        'Persian',
        'French',
        'Hausa',
        'Hindi',
        'Indonesian',
        'Italian',
        'Japanese',
        'Korean',
        'Kurdish',
        'Malayalam',
        'Dutch',
        'Norwegian',
        'Polish',
        'Pashto',
        'Portuguese',
        'Romanian',
        'Russian',
        'Sindhi',
        'Somali',
        'Albanian',
        'Swedish',
        'Swahili',
        'Tamil',
        'Tajik',
        'Thai',
        'Turkish',
        'Tatar',
        'Uyghur',
        'Urdu',
        'Uzbek',
    ];
    ?>


    <div class="container">
        <div class="select-container">
            <select class="form-select select" aria-label="Default select example" id="languageSelect">
                <?php foreach ($surahindex as $index => $value) : ?>
                    <option value="<?php echo $value; ?>"><?php echo $languages[$index]; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="select-container">
            <select class="form-select select" aria-label="Default select example" id="languageData">
            </select>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row" id="ayahCardsContainer">
            <!-- Ayah cards will be dynamically injected here -->
            <?php foreach ($cQuran as $index => $item) : ?>
                <div class="col-md-12 mb-4 col-sm-12">
                    <div class="card">
                        <div class="card-body text-end">
                            <p class="card-text"> Ayah No <?php echo $index + 1; ?> | آیت نمبر <?php echo $index + 1; ?></p>
                            <hr>
                            <h5 class="card-title"><?php echo $item['text']; ?></h5>
                            <br>

                            <div id="languageDataaudio_<?php echo $index; ?>"></div>
                            <div id="languageData1_<?php echo $index; ?>"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const languageSelect = document.getElementById('languageSelect');
            const languageData = document.getElementById('languageData');
            const ayahCardsContainer = document.getElementById('ayahCardsContainer');

            languageSelect.addEventListener('change', function() {
                const selectedLanguage = languageSelect.value;
                fetchLanguageData(selectedLanguage);
            });

            // Fetch data for the default selected language on page load
            fetchLanguageData(languageSelect.value);

            function fetchLanguageData(languageCode) {
                fetch(`https://api.alquran.cloud/v1/edition/language/${languageCode}`)
                    .then(response => response.json())
                    .then(data => {
                        const editions = data.data.map(edition =>
                            `<option value="${edition.identifier}">${edition.englishName} | ${edition.name}</option>`
                        ).join('');
                        languageData.innerHTML = editions ||
                            '<option>No data available for this language.</option>';

                        // Automatically fetch data for the first edition
                        if (data.data.length > 0) {
                            fetchSurahData(data.data[0].identifier);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching language data:', error);
                        languageData.innerHTML = '<option>Failed to load language data.</option>';
                    });

                languageData.addEventListener('change', function() {
                    fetchSurahData(languageData.value);
                });
            }

            function fetchSurahData(editionIdentifier) {
                const surahNumber = <?php echo $surah; ?>;
                fetch(`https://api.alquran.cloud/v1/surah/${surahNumber}/${editionIdentifier}`)
                    .then(response => response.json())
                    .then(data => {
                        data.data.ayahs.forEach((ayah, index) => {
                            const audioElement = ayah.audio ?
                                `<center><audio controls><source src="${ayah.audio}" type="audio/mp3"></audio></center>` :
                                '<p>No Audio</p>';
                            const translationElement = ayah.text ?
                                `<p>${ayah.text}</p>` :
                                '<p>No translation available</p>';

                            if (audioElement != '<p>No Audio</p>') {
                                document.getElementById(`languageData1_${index}`).innerHTML = " ";
                                document.getElementById(`languageDataaudio_${index}`).innerHTML = audioElement;
                            } else {
                                document.getElementById(`languageData1_${index}`).innerHTML = translationElement;
                            }
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching Surah data:', error);
                        // Show error message or handle error condition
                    });
            }
        });
    </script>


 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>