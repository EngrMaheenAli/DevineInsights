<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Quran</title>
    <style>
        /* General Reset */
        body, h1, h2, p, ul {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Background Styling */
        body {
            background-color: #f5f7fa;
        }

        /* Header Section */
        .header-section {
            background: linear-gradient(to right,  #3498db, #00f2fe);
            color: white;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
        }

        .header-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.islamicity.org/global/images/backgrounds/Al-Quran1.jpg') no-repeat center center/cover;
            opacity: 0.3;
            z-index: 0;
        }

        /* Content Section */
        .content-section {
            padding: 60px 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 900px;
            margin: 40px auto;
        }

        .content-section h2 {
            font-size: 2.2rem;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }

        .content-section h2::after {
            content: '';
            width: 80px;
            height: 3px;
            background-color: #3498db;
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .content-section p {
            font-size: 1.1rem;
            color: #34495e;
            line-height: 1.8;
            margin-bottom: 30px;
            text-align: justify;
        }

        .key-surahs {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .key-surahs li {
            margin-bottom: 15px;
        }

        .key-surahs li a {
            text-decoration: none;
            color: #2980b9;
            font-size: 1.2rem;
            transition: color 0.3s, transform 0.3s;
            position: relative;
        }

        .key-surahs li a:hover {
            color: #3498db;
            transform: translateY(-3px);
        }

        .key-surahs li a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -5px;
            width: 0;
            height: 2px;
            background-color: #3498db;
            transition: width 0.3s;
            transform: translateX(-50%);
        }

        .key-surahs li a:hover::after {
            width: 100%;
        }

        /* Footer Section */
        .footer-section {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 30px 20px;
            font-size: 0.9rem;
            border-top: 3px solid #3498db;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .header-section h1 {
                font-size: 2.5rem;
            }

            .header-section p {
                font-size: 1.1rem;
            }

            .content-section h2 {
                font-size: 2rem;
            }

            .content-section p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .header-section h1 {
                font-size: 2rem;
            }

            .header-section p {
                font-size: 1rem;
            }

            .content-section h2 {
                font-size: 1.8rem;
            }

            .content-section p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<!-- Header Section -->
<header class="header-section">
    <div class="container">
        <h1>About the Quran</h1>
        <p>The Quran is the holy book of Islam, revealed to Prophet Muhammad (PBUH) over 23 years. It is the ultimate source of guidance for Muslims around the world.</p>
    </div>
</header>

<!-- Content Section -->
<section class="content-section">
    <div class="container">
        <h2>What is the Quran?</h2>
        <p>The Quran is composed of 114 chapters known as Surahs, each of which contains verses called Ayahs. It covers various aspects of life, including theology, morality, law, and guidance for personal conduct.</p>
        
        <h2>Importance of the Quran</h2>
        <p>The Quran is considered the final revelation from Allah, confirming the scriptures that came before it. Muslims believe it to be the literal word of God, preserved unchanged since its revelation.</p>
        
        <h2>Key Surahs in the Quran</h2>
        <ul class="key-surahs">
            <li><a href="#al-fatiha">Al-Fatiha</a> - The Opening</li>
            <li><a href="#al-baqarah">Al-Baqarah</a> - The Cow</li>
            <li><a href="#yaseen">Yaseen</a> - Heart of the Quran</li>
            <li><a href="#al-kahf">Al-Kahf</a> - The Cave</li>
            <li><a href="#al-mulk">Al-Mulk</a> - The Sovereignty</li>
        </ul>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <p>&copy; 2024 Divine Insights. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
