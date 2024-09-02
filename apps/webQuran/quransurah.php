<?php


$response = file_get_contents('https://api.alquran.cloud/v1/meta');
$response = json_decode($response, true);
// print_r($response);

$surahindex = $response["data"]["surahs"]["references"];

$surahs = [
  "The Opening, a prayer for guidance, lordship, and mercy.",
  "The Cow, covering laws, guidance, and narratives.",
  "The Family of Imran, focusing on faith, law, and history.",
  "The Women, detailing laws and social regulations.",
  "The Table Spread, emphasizing lawful and unlawful practices.",
  "The Cattle, addressing themes of monotheism and prophecy.",
  "The Heights, discussing stories of prophets and lessons.",
  "The Spoils of War, covering regulations on warfare.",
  "The Repentance, discussing the importance of repentance and jihad.",
  "Jonah, emphasizing monotheism and the fate of disbelievers.",
  "Hud, recounting the stories of past prophets and their peoples.",
  "Joseph, narrating the story of Prophet Joseph.",
  "The Thunder, highlighting divine guidance and signs.",
  "Abraham, focusing on the mission of Prophet Abraham.",
  "The Rocky Tract, discussing the fate of past communities.",
  "The Bee, highlighting Allah's signs in creation.",
  "The Night Journey, covering the miraculous journey and guidance.",
  "The Cave, detailing moral and spiritual lessons from various stories.",
  "Mary, focusing on the story of Mary and Jesus.",
  "Ta-Ha, emphasizing the story of Moses and divine guidance.",
  "The Prophets, recounting the stories and lessons of prophets.",
  "The Pilgrimage, discussing the rituals of Hajj and monotheism.",
  "The Believers, describing the characteristics of true believers.",
  "The Light, emphasizing chastity and proper social conduct.",
  "The Criterion, highlighting the distinction between truth and falsehood.",
  "The Poets, narrating stories of prophets and their peoples.",
  "The Ant, discussing the stories of Solomon and other prophets.",
  "The Stories, recounting the story of Moses and other narratives.",
  "The Spider, focusing on faith and the challenges of believers.",
  "The Romans, discussing the signs of Allah and future events.",
  "Luqman, highlighting the wisdom and teachings of Luqman.",
  "The Prostration, emphasizing the resurrection and divine signs.",
  "The Combined Forces, discussing the Battle of the Trench and social regulations.",
  "Sheba, focusing on the stories of David, Solomon, and Sheba.",
  "The Originator, highlighting Allah's creation and signs.",
  "Ya-Sin, emphasizing the message of the Quran and resurrection.",
  "Those Who Set the Ranks, discussing the mission of prophets and resurrection.",
  "Sad, narrating the story of David, Solomon, and other themes.",
  "The Groups, emphasizing monotheism and the afterlife.",
  "The Forgiver, highlighting divine mercy and punishment.",
  "Explained in Detail, discussing the signs of Allah and guidance.",
  "The Consultation, emphasizing divine revelation and unity.",
  "The Gold Adornments, discussing the arrogance of disbelievers.",
  "The Smoke, highlighting the signs and punishment.",
  "The Crouching, discussing the fate of disbelievers and divine signs.",
  "The Wind-Curved Sandhills, recounting the story of 'Ad and other themes.",
  "Muhammad, focusing on the mission of Prophet Muhammad and warfare.",
  "The Victory, discussing the Treaty of Hudaybiyyah and its outcomes.",
  "The Rooms, emphasizing social conduct and etiquette.",
  "Qaf, highlighting the themes of resurrection and divine signs.",
  "The Winnowing Winds, discussing the fate of past peoples and resurrection.",
  "The Mount, emphasizing divine punishment and resurrection.",
  "The Star, discussing the revelation and divine guidance.",
  "The Moon, highlighting the signs of Allah and resurrection.",
  "The Beneficent, emphasizing Allah's mercy and creation.",
  "The Inevitable, discussing the Day of Judgment and its aftermath.",
  "The Iron, highlighting divine power and charity.",
  "The Pleading Woman, discussing social issues and regulations.",
  "The Exile, recounting the expulsion of Banu Nadir and divine guidance.",
  "The Woman to be Examined, discussing the treatment of believers and disbelievers.",
  "The Ranks, emphasizing the importance of unity and fighting in Allah's cause.",
  "The Congregation, highlighting the significance of Friday prayer.",
  "The Hypocrites, discussing the characteristics and fate of hypocrites.",
  "The Mutual Disillusion, emphasizing faith and accountability.",
  "The Divorce, detailing the regulations of divorce.",
  "The Prohibition, discussing personal conduct and repentance.",
  "The Sovereignty, highlighting Allah's power and creation.",
  "The Pen, emphasizing the mission of Prophet Muhammad and divine guidance.",
  "The Reality, discussing the Day of Judgment and its consequences.",
  "The Ascending Stairways, emphasizing the fate of disbelievers and the afterlife.",
  "Noah, narrating the story of Prophet Noah and his mission.",
  "The Jinn, discussing the world of jinn and their reaction to the Quran.",
  "The Enshrouded One, emphasizing prayer and patience.",
  "The Cloaked One, highlighting the mission of Prophet Muhammad and divine warning.",
  "The Resurrection, focusing on the Day of Judgment and accountability.",
  "Man, discussing the creation of man and the afterlife.",
  "The Emissaries, emphasizing the fate of disbelievers and the Day of Judgment.",
  "The Tidings, emphasizing the themes of resurrection and judgment.",
  "Those Who Drag Forth, discussing the Day of Judgment and resurrection.",
  "He Frowned, recounting an incident involving Prophet Muhammad and a blind man.",
  "The Overthrowing, highlighting the signs of the Day of Judgment.",
  "The Cleaving, discussing the Day of Judgment and divine justice.",
  "The Defrauding, emphasizing honesty in trade and the Day of Judgment.",
  "The Splitting Open, highlighting the signs of the Day of Judgment.",
  "The Mansions of the Stars, discussing the persecution of believers and divine justice.",
  "The Morning Star, emphasizing divine power and creation.",
  "The Most High, highlighting divine praise and guidance.",
  "The Overwhelming, discussing the fate of disbelievers and the afterlife.",
  "The Dawn, emphasizing divine judgment and the fate of past peoples.",
  "The City, highlighting the trials of life and moral conduct.",
  "The Sun, emphasizing the signs of Allah in creation.",
  "The Night, discussing the contrast between righteous and wicked deeds.",
  "The Morning Hours, emphasizing divine care and guidance.",
  "The Relief, highlighting the comfort and ease after hardship.",
  "The Fig, discussing the creation of man and divine judgment.",
  "The Clot, emphasizing the creation of man and the importance of knowledge.",
  "The Power, highlighting the significance of the Night of Decree.",
  "The Clear Proof, discussing the clarity of divine guidance.",
  "The Earthquake, emphasizing the signs of the Day of Judgment.",
  "The Courser, discussing the ingratitude of man and divine judgment.",
  "The Calamity, highlighting the suddenness and severity of the Day of Judgment.",
  "The Rivalry in Worldly Increase, emphasizing the distractions of worldly pursuits.",
  "The Declining Day, highlighting the importance of faith and righteous deeds.",
  "The Traducer, discussing the fate of those who slander and hoard wealth.",
  "The Elephant, recounting the story of the Army of the Elephant.",
  "The Quraish, emphasizing divine protection and provision.",
  "The Small Kindnesses, discussing the importance of charity and prayer.",
  "The Abundance, emphasizing divine blessings and gratitude.",
  "The Disbelievers, highlighting the clear distinction between belief and disbelief.",
  "The Divine Support, discussing the victory and support from Allah.",
  "The Palm Fiber, recounting the fate of Abu Lahab and his wife.",
  "The Sincerity, emphasizing the oneness of Allah.",
  "The Daybreak, seeking protection from evil.",
  "The Mankind, seeking protection from the evil of whispers."
];

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Devine Insights</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">





  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">

  <style>
    .arabic {
      direction: rtl;
      font-family: 'Amiri Quran', serif;

    }
    .span{
      /* direction: rtl; */
      font-family: 'Amiri Quran', serif;
      padding: 50px;

    }

    /* Custom Styles */
    #hero {
      background: url('../assets/img/hero-bg.jpg') no-repeat center center;
      background-size: cover;
      color: #fff;
      padding: 100px 0;
      text-align: center;
      /* Center text */
      height: 100vh;
      /* Full viewport height */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .hero-title {
      font-size: 3rem;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .hero-subtitle {
      font-size: 1.2rem;
      margin-bottom: 30px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
    }

    #hero .btn-get-started {
      background-color: #0066cc;
      color: white;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      transition: background-color 0.3s ease-in-out;
      margin-right: 15px;
    }

    #hero .btn-get-started:hover {
      background-color: #004d99;
    }

    #hero .btn-watch-video {
      background-color: transparent;
      color: white;
      padding: 10px 20px;
      border: 2px solid white;
      border-radius: 25px;
      text-decoration: none;
      transition: background-color 0.3s ease-in-out;
    }

    #hero .btn-watch-video:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .marquee-container {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      font-size: 1.5rem;
      padding: 10px 0;
      text-align: center;
    }

    .marquee-container marquee h1 span {
      font-family: 'Amiri Quran', sans-serif;
      font-size: 1.2rem;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
    }
  </style>


</head>

<body class="quransurah">



  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section d-flex align-items-center justify-content-center text-center" style="position: relative;">
      <!-- Header is hidden but kept in the code structure -->
      <header id="header" class="header d-flex align-items-center sticky-top" style="display: none;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
          <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- <h1 class="sitename">Islamic Wisdom</h1> -->
          </a>
          <!-- <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul> -->
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
          <!-- <a class="btn-getstarted" href="index.html#about">Get Started</a> -->
        </div>
      </header>

      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center">
            <marquee behavior="scroll" direction="left" scrollamount="5">
              <h1><span class="span">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ </span></h1>
            </marquee>
            <br>
            <h1 class="hero-title">Discover Divine Insights</h1>
            <p class="hero-subtitle">Your Comprehensive Quran App for Daily Inspiration and Spiritual Growth</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center">
                <span>Watch Video</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Marquee with Dua -->
      <div class="marquee-container">
        <marquee behavior="scroll" direction="left" scrollamount="5">
          <span>In the name of Allah, the Most Gracious, the Most Merciful</span>
        </marquee>
      </div>
    </section>
    <!-- /Hero Section -->



    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <h5><a href="about-the-quran.php">About the Quran</a></h5>
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <h5>Al Mulk</h5>
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <h5>Yaseen</h5>
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <h5>Al kahf</h5>
          </div>

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <h5>Al waqi'ah</h5>
          </div>


          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <h5>Al Rehman</h5>
          </div>


        </div>

      </div>

    </section>





    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SURAH'S</h2>
        <p>Explore and learn from all the Surahs of the Quran, from Al-Fatiha to An-Nas, each offering unique guidance and wisdom for every aspect of life.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <?php
          foreach ($surahindex as $key => $value) {
            echo '<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                     <div class="service-item position-relative">
                     <i class="bi bi-broadcast"></i>
                     <h4><a href="surah.php?index=' . $value["number"] . '" class="stretched-link arabic"> ' . $value["name"] . ' </a></h4>
                     <p>  Surah ' . $value["englishName"] . ' | '  . $surahs[$key] . '</p>
                     <p>    Verses : ' . $value["numberOfAyahs"] . '</p>
                     </div>
                     </div>
          ';
          }
          ?>
        </div>
      </div>

      <!-- ............................. -->




    </section><!-- /Services Section -->





  </main>

  <footer id="footer" class="footer" style="background-color: #000; color: #fff; padding: 40px 0;">

    <div class="container">
      <div class="row justify-content-between">

        <!-- About Section -->
        <div class="col-md-3">
          <h3 style="color: #87CEEB;">About Us</h3>
          <p style="line-height: 1.8;">Devine Insights is dedicated to providing accurate and inspiring Islamic content. We aim to educate and uplift the Muslim community with the guidance of the Quran and Sunnah.</p>
        </div>

        <!-- Useful Links -->
        <div class="col-md-3">
          <h3 style="color: #87CEEB;">Useful Links</h3>
          <ul style="list-style-type: none; padding: 0; line-height: 1.8;">
            <li><a href="home.php" style="color: #fff; text-decoration: none;">Home</a></li>
            <li><a href="about.php" style="color: #fff; text-decoration: none;">About</a></li>
            <li><a href="contact.php" style="color: #fff; text-decoration: none;">Contact</a></li>
            <li><a href="" style="color: #fff; text-decoration: none;">Privacy Policy</a></li>
            <li><a href="#" style="color: #fff; text-decoration: none;">Terms of Service</a></li>
          </ul>
        </div>

        <!-- Contact Information -->
        <div class="col-md-3">
          <h3 style="color: #87CEEB;">Contact Us</h3>
          <p style="line-height: 1.8;">
            <strong>Email:</strong> info@devineinsights.com<br>
            <strong>Phone:</strong> +123 456 7890<br>
            <strong>Address:</strong> 123 Islamic Street, City, Country
          </p>
        </div>
      </div>

      <hr style="border-top: 1px solid #fff; margin: 20px 0;">

      <div class="social-links d-flex justify-content-center" style="margin-bottom: 20px;">
        <a href="#" style="color: #87CEEB; margin: 0 15px;"><i class="bi bi-twitter-x"></i></a>
        <a href="#" style="color: #87CEEB; margin: 0 15px;"><i class="bi bi-facebook"></i></a>
        <a href="#" style="color: #87CEEB; margin: 0 15px;"><i class="bi bi-instagram"></i></a>
        <a href="#" style="color: #87CEEB; margin: 0 15px;"><i class="bi bi-linkedin"></i></a>
      </div>

      <div class="text-center">
        <p>© <strong>Devine Insights</strong> | All Rights Reserved</p>
        <p>Designed by <a href="#" style="color: #87CEEB; text-decoration: none;">Engr. Maheen Ali</a></p>
      </div>
    </div>

  </footer>


  <!-- <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Devine Insights</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        Designed by <a href="">Engr. Maheen Ali/a>
      </div>
    </div>

  </footer> -->



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>