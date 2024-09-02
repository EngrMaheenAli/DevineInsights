<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Divine Insights</title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"> <!-- Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> <!-- AOS Library for animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css"> <!-- AOS CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        .section-title h2 {
            font-size: 2.5rem;
            color: black;
            margin-bottom: 20px;
        }
        .section-title p {
            font-size: 1.125rem;
            line-height: 1.6;
        }
        .icon-box {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .icon-box:hover {
            transform: translateY(-10px);
        }
        .icon-box i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }
        .icon-box h4 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }
        .icon-box p {
            font-size: 1rem;
        }
        .about-btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color:#3498db;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
        }
        .about-btn:hover {
            background-color:#333;
            text-decoration: none;
            color: #fff;
        }
        .list-unstyled {
            margin: 0;
            padding: 0;
        }
        .list-unstyled li {
            font-size: 1rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .list-unstyled i {
            font-size: 1.5rem;
            color: #28a745;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- About Section -->
<section id="about" class="about section py-5">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us</h2>
    <p>Divine Insights is dedicated to revolutionizing your Quranic study experience. Our mission is to provide a powerful, user-friendly platform that integrates advanced technology with the timeless wisdom of the Quran. As an open-source initiative, we collaborate with renowned organizations to ensure our resources are accurate, accessible, and enriching.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-5">

      <!-- Mission and Vision -->
      <div class="col-xl-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Our Mission</h3>
        <p>
          At Divine Insights, we strive to make the Quran accessible and comprehensible for everyone. Our goal is to provide tools and resources that foster a deep, meaningful engagement with the Quranic text, leveraging modern technology to enhance spiritual growth and understanding.
        </p>
        <a href="#" class="about-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
      </div>

      <!-- Core Values -->
      <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200">
        <h3>Our Core Values</h3>
        <ul class="list-unstyled">
          <li><i class="bi bi-check-circle"></i> Integrity: Ensuring that all Quranic resources are accurate and trustworthy.</li>
          <li><i class="bi bi-check-circle"></i> Accessibility: Providing a platform that is available on various devices for ease of access.</li>
          <li><i class="bi bi-check-circle"></i> Community: Engaging with and valuing feedback from our global user base to continuously improve our platform.</li>
          <li><i class="bi bi-check-circle"></i> Innovation: Offering unique features and tools to enhance the Quranic study experience.</li>
        </ul>
      </div>

    </div>

    <div class="row gy-5 mt-5">

      <!-- Features Overview -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
        <h3>Key Features</h3>
        <div class="icon-box">
          <i class="bi bi-shield-check"></i>
          <h4><a href="#" class="stretched-link">Trusted Resources</a></h4>
          <p>Our platform relies on verified sources to ensure the accuracy of Quranic texts and interpretations.</p>
        </div>
        <div class="icon-box mt-4">
          <i class="bi bi-device-phone"></i>
          <h4><a href="#" class="stretched-link">Mobile Accessibility</a></h4>
          <p>Access our platform from any device, anytime, ensuring that you can engage with the Quran wherever you are.</p>
        </div>
      </div>

      <!-- Get Involved -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <h3>Get Involved</h3>
        <div class="icon-box">
          <i class="bi bi-people"></i>
          <h4><a href="#" class="stretched-link">Join Our Community</a></h4>
          <p>We invite developers, scholars, and learners to contribute and help shape the future of Divine Insights.</p>
        </div>
        <div class="icon-box mt-4">
          <i class="bi bi-lightbulb"></i>
          <h4><a href="#" class="stretched-link">Contribute Ideas</a></h4>
          <p>Your feedback and suggestions are invaluable in helping us enhance our platform and serve you better.</p>
        </div>
      </div>

    </div>

  </div>

</section><!-- /About Section -->

<!-- Initialize AOS -->
<script>
  AOS.init();
</script>

</body>
</html>
