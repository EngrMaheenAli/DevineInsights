
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qibla Finder</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #3498db, #ffffff); 
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #qibla-container {
            max-width: 90%;
            width: 400px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: black;
        }
        #compass {
            width: 100%;
            height: auto;
            padding-top: 100%; 
            background: url('assets/img/campass.png') no-repeat center center;
            background-size: cover;
            border: 2px solid #3498db; 
            border-radius: 50%;
            position: relative;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        #arrow {
            width: 10px;
            height: 150px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: bottom;
            transform: rotate(0deg);
            background: #e74c3c; 
            border-radius: 5px;
            transition: transform 0.5s ease;
        }
        p {
            font-size: 1.2rem;
            color: black; 
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="qibla-container">
        <h1>Qibla Finder</h1>
        <div id="compass"> 
            <div id="arrow"></div>
        </div>
        <p id="qibla-direction">Finding your Qibla direction...</p>
    </div>
    <script>
        window.onload = function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(getQiblaDirection, showError);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        };

        function getQiblaDirection(position) {
            const userLat = position.coords.latitude;
            const userLon = position.coords.longitude;
            
            const apiUrl = `http://api.aladhan.com/v1/qibla/${userLat}/${userLon}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.code === 200 && data.status === 'OK' && data.data.direction) {
                        const qiblaDirection = data.data.direction;
                        document.getElementById('qibla-direction').textContent = `Qibla Direction: ${qiblaDirection.toFixed(2)}°`;

                        const arrow = document.getElementById('arrow');
                        arrow.style.transform = `rotate(${qiblaDirection}deg)`;
                    } else {
                        alert('Error: Qibla direction data is not available.');
                    }
                })
                .catch(error => {
                    console.error('Error fetching Qibla direction:', error);
                    alert('Error fetching Qibla direction.');
                });
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }
    </script>
</body>
</html>
