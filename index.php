<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #000000, #1e90ff, #ffffff); /* Black to blue to white gradient */
            animation: backgroundAnimation 15s infinite alternate;
            overflow: hidden;
        }

        .splash-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            position: absolute; /* Ensure it doesn't create extra space */
            top: 0;
            left: 0;
            border: none; /* Ensure no border is added */
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* Ensure padding and borders are included in the element's total width and height */
        }

        .logo {
            max-width: 300px;
            height: auto;
            animation: logoAnimation 10s ease-in-out forwards;
            transform-origin: center;
            position: relative;
            z-index: 1;
        }

        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        @keyframes logoAnimation {
            0% {
                opacity: 0;
                transform: scale(0.5) rotate(0deg);
            }
            50% {
                opacity: 1;
                transform: scale(1.2) rotate(360deg);
            }
            70% {
                transform: scale(1.2) rotate(720deg);
            }
            100% {
                opacity: 1;
                transform: scale(1) rotate(1080deg);
            }
        }
        
        /* Media Queries for Responsive Design */
        @media (max-width: 600px) {
            .logo {
                max-width: 200px; 
            }
        }

        @media (min-width: 1200px) {
            .logo {
                max-width: 400px; 
            }
        }
    </style>
</head>
<body>
    <div class="splash-container">
        <img src="assets/img/logo.png" alt="Your Logo" class="logo">
    </div>
    <script>
        setTimeout(function(){
            window.location.href = 'apps/home.php';
        }, 10000); 
    </script>
</body>
</html>
