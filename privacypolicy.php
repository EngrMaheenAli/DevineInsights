<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Devine Insights</title>
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
    background: linear-gradient(to right, #3498db, #00f2fe);
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

.footer-section p a {
    color: #ffffff;
    text-decoration: none;
    border-bottom: 1px solid #ffffff;
    transition: border-bottom 0.3s;
}

.footer-section p a:hover {
    border-bottom: 1px solid #f5f7fa;
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
    <section class="header-section">
        <h1>Privacy Policy</h1>
        <p>Your privacy is important to us. This privacy policy explains how we handle your personal information.</p>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <h2>Information Collection</h2>
        <p>We collect various types of information to provide and improve our services. This includes personal data, usage data, and cookies.</p>

        <h2>Use of Information</h2>
        <p>The information we collect is used for a variety of purposes such as maintaining our services, improving user experience, and ensuring security.</p>

        <h2>Data Security</h2>
        <p>Your data security is paramount. We use industry-standard measures to protect your data from unauthorized access.</p>

        <ul class="key-surahs">
            <li><a href="#">Quranic Reference: Surah Al-Baqarah, Verse 286</a></li>
            <li><a href="#">Quranic Reference: Surah Al-Ikhlas, Verse 1-4</a></li>
        </ul>
    </section>

    <!-- Footer Section -->
    <section class="footer-section">
        <p>&copy; 2024 Devine Insight. All rights reserved.</p>
        <p><a href="contact.php">Contact Us</a></p>
    </section>

</body>
</html>
