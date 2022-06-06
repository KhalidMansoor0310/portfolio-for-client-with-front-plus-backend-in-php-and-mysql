<?php
include_once './includes/db.php';
include_once './includes/function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aqib Khan - Flutter Developer</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <?php
      $result = header_data($connection);
      ?>
      <h1><a href="index.html"><?= $result['heading'] ?></a></h1>
      <h2>I'm a passionate <span><?= $result['sub_heading'] ?></span> from Pakistan</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <?php
  $res = getAbout($connection);

  ?>
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p><?= $res['main_heading'] ?></p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/aqib.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?= $res['second_main_heading'] ?></h3>
          <p class="fst-italic">
            <?= $res['sub_heading'] ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= $res['dob'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $res['website'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?= $res['address'] ?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $res['age'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $res['degree'] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?= $res['email'] ?></span></li>
              </ul>
            </div>
          </div>
          <p>
            <?= $res['descp'] ?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->
    <!-- ======= Skills  ======= -->

    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-8 m-auto">
          <?php


          $q = "SELECT * from skills";
          $r = mysqli_query($connection, $q);
          while ($row = mysqli_fetch_assoc($r)) {
          ?>
            <div class="progress">
              <span class="skill"><?= $row['skill_name'] ?> <i class="val"><?= $row['skill_value'] ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $row['skill_value'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>

      </div>

    </div><!-- End Skills -->


  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->

  <?php

  $q = "SELECT * from education";
  $res = mysqli_query($connection, $q);
  $row = mysqli_fetch_assoc($res);

  ?>
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p><?= $row['resume_head'] ?></p>
      </div>

      <div class="row">
        <div class="col-lg-6">


          <h3 class="resume-title"><?= $row['education_head'] ?></h3>
          <div class="resume-item">
            <h4><?= $row['matric'] ?></h4>
            <h5><?= $row['date_matric'] ?></h5>
            <p><em><?= $row['school'] ?></em></p>
          </div>

          <div class="resume-item">
            <h4><?= $row['intermediate'] ?></h4>
            <h5><?= $row['date_college'] ?></h5>
            <p><em><?= $row['college'] ?></em></p>
          </div>

          <div class="resume-item">
            <h4><?= $row['bs'] ?></h4>
            <h5><?= $row['date_uni'] ?></h5>
            <p><em><?= $row['university'] ?></em></p>
          </div>

        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4><?= $row['skill'] ?></h4>
            <h5><?= $row['date'] ?></h5>
            <p><em><?= $row['address'] ?></em></p>
            <p>
            <ul>
              <li><?= $row['details'] ?></li>

            </ul>
            </p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>
      <div class="row">
        <?php
        $q = "SELECT * from services";
        $r = mysqli_query($connection, $q);
        while ($row = mysqli_fetch_assoc($r)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href=""><?= $row['service_name'] ?></a></h4>
              <p><?= $row['service_desc'] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>





  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Projects</p>
      </div>
      <div class="row portfolio-container">
        <?php
        $q = "SELECT * from projects_images";
        $r = mysqli_query($connection, $q);
        while ($row = mysqli_fetch_assoc($r)) {
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
             <img src="images/<?=$row['image']?>" class="img-fluid" alt=""><br>
            </div>
            <div class=" my-3">
              <a href="portfolio-details.php?id=<?=$row['id']?>" >View Details</a>
            </div>
          </div>
        <?php
        }
        ?>
      </div>







    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

      

    

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>contact@example.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section>
  <div class="credits">
    Designed by <a href="">Khalid Mansoor</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>