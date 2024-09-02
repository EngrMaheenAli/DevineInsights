<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Features</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Raleway', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
        }

        .features {
            background-color: #ffffff; /* White background for the features section */
            padding: 60px 0;
            border-top: 5px solid #e0f7fa; /* Blue top border */
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            text-transform: uppercase;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 120px;
            height: 6px;
            background: #3498db;
            border-radius: 3px;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-top: 10px;
            line-height: 1.6;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .carousel-item {
            text-align: center;
            padding: 20px;
        }

        .features-item {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }

        .features-item h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #3498db;
            font-weight: 700;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .features-item p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .features-item a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 600;
            display: inline-block;
            padding: 12px 24px;
            border-radius: 6px;
            background-color: #3498db;
            transition: background-color 0.3s, transform 0.3s;
        }

        .features-item a:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #3498db;
            border-radius: 50%;
        }

        @media (max-width: 768px) {
            .features-item h3 {
                font-size: 1.6rem;
            }

            .features-item p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Features Section -->
    <section id="features" class="features">
        <!-- Section Title -->
        <div class="container section-title">
            <h2>Features</h2>
            <p>Discover the essential tools and features designed to enhance your understanding and practice of the Quran.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div id="featuresCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="features-item">
                            <h3><a href="surah.php">🌍📖 Multilingual Qur'an</a></h3>
                            <p>Explore the Qur'an in multiple languages for deeper insight and understanding.</p>
                        </div>
                    </div>

                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <div class="features-item">
                            <h3><a href="calender.php">📅 Hijri Calendar</a></h3>
                            <p>Track Islamic dates accurately with our detailed Hijri calendar.</p>
                        </div>
                    </div>

                    <!-- Third Slide -->
                    <div class="carousel-item">
                        <div class="features-item">
                            <h3><a href="GetHijriDate.php">📅 Date Converter</a></h3>
                            <p>Seamlessly convert Gregorian dates to Hijri dates and vice versa.</p>
                        </div>
                    </div>

                    <!-- Fourth Slide -->
                    <div class="carousel-item">
                        <div class="features-item">
                            <h3><a href="qibla-finder.php">🧭 Qibla Finder</a></h3>
                            <p>Find the direction of the Qibla from anywhere in the world.</p>
                        </div>
                    </div>

                    <!-- Fifth Slide -->
                    <div class="carousel-item">
                        <div class="features-item">
                            <h3><a href="namaz.php">🕋 Prayer Times</a></h3>
                            <p>Get accurate prayer times for your location.</p>
                        </div>
                    </div>

                    <!-- Sixth Slide -->
                    <div class="carousel-item">
                        <div class="features-item">
                            <h3><a href="tasbeeh.php">🔢 Tasbeeh Counter</a></h3>
                            <p>Keep track of your dhikr with our simple tasbeeh counter.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#featuresCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featuresCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!-- End Container -->
    </section><!-- End Features Section -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
