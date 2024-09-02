<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islam 360 Interface</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Amiri', serif;
            background-color: #f4f4f4;
            overflow-x: hidden;
            transition: margin-left 0.3s ease;
            /* Smooth transition when the menu is opened */
        }

        .marquee {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: green;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-family: 'Noto Naskh Arabic', serif;
            font-size: 18px;
            white-space: nowrap;
            overflow: hidden;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1200;
        }

        .marquee span {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 10s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #3498db, #f4f4f4);
        }

        .menu-item {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background-color: #3498db;
            color: white;
            padding: 15px 20px;
            margin: 10px 0;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .menu-item a {
            color: white;
            text-decoration: none;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .menu-item:hover {
            background-color: black;
        }

        .menu-item a:hover {
            color: #3498db;
            /* background-color: white; */
            border-radius: 10px;
            transition: 0.3s;
        }

        .icon {
            font-size: 24px;
            margin-right: 15px;
        }

        .text {
            font-size: 18px;
        }

        /* Slide-in menu styles */
        .side-menu {
            position: fixed;
            top: 0;
            left: -250px;
            /* Initially hidden */
            width: 250px;
            height: 100%;
            background-color: black;
            color: white;
            transition: left 0.3s ease;
            z-index: 1000;
            padding: 20px;
        }

        .side-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .side-menu ul li {
            padding: 15px 0;
            border-bottom: 1px solid white;
            cursor: pointer;
        }

        .side-menu ul li a {
            color: white;
            text-decoration: none;
        }

        .side-menu ul li a:hover {
            /* background-color: #0073e6; */
            color: #3498db;
        }

        .menu-toggle {
            position: fixed;
            top: 20px;
            left: 7px;
            font-size: 24px;
            cursor: pointer;
            color: white;
            z-index: 1100;
        }

        .menu-opened .side-menu {
            left: 0;
        }

        .menu-opened body {
            margin-left: 250px;
            /* Shift body content to the right when the menu is open */
        }
    </style>
</head>

<body>

    <div class="marquee">
        <span>Welcome to the Devine Insights! Explore our features above.</span>
    </div>

    <!-- Menu Toggle Button Wrapper -->
    <div class="menu-toggle-wrapper">
        <div class="menu-toggle">☰</div>
    </div>

    <!-- Slide-In Menu -->
    <div class="side-menu">
        <ul>
        <li><a href="webQuran/quransurah.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li>Settings</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="menu-item" id="quran">
            <a href="webQuran/quransurah.php">
                <div class="icon">📖</div>
                <div class="text">Recite the Holy Quran</div>
            </a>
        </div>
        <div class="menu-item" id="hadith">
            <a href="webHadith/indexhadith.php">
                <div class="icon">📜</div>
                <div class="text">Hadith Collection</div>
            </a>
        </div>
        <div class="menu-item" id="ibadat">
            <a href="features.php">
                <div class="icon">🕌</div>
                <div class="text">Ibaadat Collection or features</div>
            </a>
        </div>
        <div class="menu-item" id="supplications">
            <a href="collections/">
                <div class="icon">🙏</div>
                <div class="text">Supplications</div>
            </a>
        </div>
    </div>

    <!-- JavaScript/jQuery -->
    <script>
        $(document).ready(function () {
            // Toggle Slide-In Menu
            $('.menu-toggle').click(function () {
                $('body').toggleClass('menu-opened');
            });
        });
    </script>
</body>

</html>
