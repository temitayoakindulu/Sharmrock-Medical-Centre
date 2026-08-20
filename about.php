<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />

    <link rel="stylesheet" href="./CSS/index.css" />
    <link rel="icon" type="image/png" href="Images/SMC-favicon.png">
    <title>About Sharmrock</title>
  </head>
  <body>
    <header>
      <!--  NAVBAR -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top p-3">
        <div class="container-xxl">
          <a href="" class="navbar-brand">
            <span class="fw-bold d-none d-lg-inline">
              SHARMROCK MED-CENTER
            </span>
            <span class="fw-bold d-inline d-lg-none"> SHARMROCK </span>
          </a>

          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button "
            data-bs-toggle="collapse"
            data-bs-target="#main-nav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar Links -->
          <div
            class="collapse navbar-collapse justify-content-around align-center"
            id="main-nav"
          >
            <ul class="navbar-nav">
              <li class="nav-item me-3">
                <a href="index.php" class="nav-link" id="home">Home</a>
              </li>

              <li class="nav-item me-3">
                <a href="#" class="nav-link active-page" id="about">About</a>
              </li>

              <li class="nav-item me-3">
                <a href="service.php" class="nav-link" id="services"
                  >Services</a
                >
              </li>
              <li class="nav-item me-3">
                <a href="contact.php" class="nav-link" id="contact">Contact</a>
              </li>

              <li class="nav-item me-3">
                <a href="blog.php" class="nav-link" id="contact">Blog Post</a>
              </li>

              <!-- <li class="nav-item">
                <a href="" class="d-md-none d-lg-inline nav-link" id="blog"
                  >Blog Post</a>
              </li> -->
            </ul>

            <div class="nav-buttons">
              <a
                href="appointment.php"
                class="btn btn-sm btn-success d-sm-none d-lg-inline"
                >Book Appointment</a
              >
              <a href="map.php" class="btn btn-sm btn-outline-success"
                ><i class="bi bi-geo-alt-fill text-success"></i> Visit Us</a
              >
            </div>
          </div>
        </div>
      </nav>
    </header>

<main>
    
<!-- ==========================
        ABOUT HERO SECTION
========================== -->

<section class="about-hero">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <span class="about-tag">
                    ABOUT SHARMROCK
                </span>

                <h1 class="display-4 fw-bold mt-3">

                    Delivering Quality Healthcare
                    <span>With Compassion & Excellence</span>

                </h1>

                <p class="lead mt-4">

                    Learn more about our journey, our founder,
                    our commitment to quality healthcare,
                    and the values that continue to inspire us
                    every single day.

                </p>

                <div class="mt-5">

                    <a href="#founder" class="btn btn-success btn-lg">

                        Meet Our Founder

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>




<!-- =====================================
            MEET OUR FOUNDER
====================================== -->

<section class="founder-section py-5" id="founder">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Founder Image -->

            <div class="col-lg-5 text-center">

                <div class="founder-image-box">

                    <img
                        src="Images/founder.jpg"
                        alt="Founder"
                        class="img-fluid founder-image">

                </div>

            </div>

            <!-- Founder Content -->

            <div class="col-lg-7">

                <span class="section-subtitle">

                    OUR FOUNDER

                </span>

                <h2 class="section-title mt-3">

                    A Vision Built on
                    Compassion, Excellence
                    and Community Care

                </h2>

                <h4 class="mt-4 founder-name">

                    Dr. Bayo Oludiya Owoeye

                </h4>

                <p class="founder-role">

                    Founder & Medical Director

                </p>

                <p>

                    Sharmrock Medical Health Centre was founded with a passion
                    to provide quality, affordable and patient-centred healthcare
                    services to individuals and families within the community.

                    What began as a vision to bridge the gap in accessible
                    healthcare has grown into a trusted medical institution
                    dedicated to excellence, professionalism and compassionate
                    service.

                </p>

                <p>

                    Under the leadership of our founder, the hospital continues
                    to embrace innovation, uphold the highest ethical standards,
                    and ensure every patient receives personalised medical care
                    in a safe, welcoming and healing environment.

                </p>

                <!-- Quote -->

                <div class="founder-quote mt-4">

                    <i class="bi bi-quote"></i>

                    <p>

                        "Healthcare is more than treating illness;
                        it is about restoring hope, preserving dignity,
                        and improving lives every day."

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>




<!--=================================
        OUR MEDICAL TEAM
==================================-->

<section class="team-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-subtitle">
                OUR TEAM
            </span>

            <h2 class="section-title mt-3">
                Meet Our Dedicated Healthcare Professionals
            </h2>

            <p class="team-intro">
                Our experienced team is committed to delivering exceptional healthcare
                services with professionalism, compassion, and excellence.
            </p>

        </div>

        <div class="row g-4">

            <!-- Doctor 1 -->

            <div class="col-md-6 col-lg-4">

                <div class="team-card">

                    <img src="Images/team/team1.jpg"
                        class="img-fluid"
                        alt="Medical Director">

                    <div class="team-content">

                        <h5>Dr. Michael Johnson</h5>

                        <p class="role">
                            Medical Director
                        </p>

                        <div class="team-social mt-3">

                            <a href="#"><i class="bi bi-envelope-fill"></i></a>

                            <a href="#"><i class="bi bi-linkedin"></i></a>

                            <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Doctor 2 -->

            <div class="col-md-6 col-lg-4">

                <div class="team-card">

                    <img src="Images/team/team2.jpg"
                        class="img-fluid"
                        alt="Senior Physician">

                    <div class="team-content">

                        <h5>Dr. Sarah Williams</h5>

                        <p class="role">
                            Senior Physician
                        </p>

                        <div class="team-social mt-3">

                                <a href="#"><i class="bi bi-envelope-fill"></i></a>

                                <a href="#"><i class="bi bi-linkedin"></i></a>

                                <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Doctor 3 -->

            <div class="col-md-6 col-lg-4">

                <div class="team-card">

                    <img src="Images/team/team3.jpg"
                        class="img-fluid"
                        alt="Chief Nurse">

                    <div class="team-content">

                        <h5>Nurse Grace Thompson</h5>

                        <p class="role">
                            Chief Nursing Officer
                        </p>

                        <div class="team-social mt-3">

                              <a href="#"><i class="bi bi-envelope-fill"></i></a>

                              <a href="#"><i class="bi bi-linkedin"></i></a>

                              <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Doctor 4 -->

            <div class="col-md-6 col-lg-4">

                <div class="team-card">

                    <img src="Images/team/team4.jpg"
                        class="img-fluid"
                        alt="Laboratory Scientist">

                    <div class="team-content">

                        <h5>Dr. Daniel Brown</h5>

                        <p class="role">
                            Laboratory Scientist
                        </p>

                        <div class="team-social mt-3">

                              <a href="#"><i class="bi bi-envelope-fill"></i></a>

                              <a href="#"><i class="bi bi-linkedin"></i></a>

                              <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Doctor 5 -->

            <div class="col-md-6 col-lg-4">

                <div class="team-card">

                    <img src="Images/team/team5.jpg"
                        class="img-fluid"
                        alt="Pharmacist">

                    <div class="team-content">

                        <h5>Dr. Emily Davis</h5>

                        <p class="role">
                            Clinical Pharmacist
                        </p>

                        <div class="team-social mt-3">

                              <a href="#"><i class="bi bi-envelope-fill"></i></a>

                              <a href="#"><i class="bi bi-linkedin"></i></a>

                              <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Doctor 6 -->

            <div class="col-md-6 col-lg-4">

                <div class="team-card">

                    <img src="Images/team/team6.jpg"
                        class="img-fluid"
                        alt="Radiographer">

                    <div class="team-content">

                        <h5>Mr. James Anderson</h5>

                        <p class="role">
                            Radiographer
                        </p>

                        <div class="team-social mt-3">

                              <a href="#"><i class="bi bi-envelope-fill"></i></a>

                              <a href="#"><i class="bi bi-linkedin"></i></a>

                              <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>





<!--=================================
        WHY CHOOSE US
==================================-->

<section class="why-us py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-subtitle">
                WHY CHOOSE US
            </span>

            <h2 class="section-title mt-3">
                Trusted Healthcare You Can Count On
            </h2>

            <p class="why-intro">
                At Sharmrock Medical Health Centre, we combine medical
                expertise, modern technology, and compassionate care to
                provide every patient with an exceptional healthcare experience.
            </p>

        </div>

        <div class="row g-4">

            <!-- Card 1 -->

            <div class="col-md-6 col-lg-4">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>

                    <h4>Experienced Professionals</h4>

                    <p>
                        Our qualified doctors, nurses, and specialists work
                        together to provide safe, reliable, and patient-focused
                        medical care.
                    </p>

                </div>

            </div>

            <!-- Card 2 -->

            <div class="col-md-6 col-lg-4">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-hospital-fill"></i>
                    </div>

                    <h4>Modern Medical Facilities</h4>

                    <p>
                        We provide quality healthcare using modern equipment,
                        comfortable facilities, and efficient clinical practices.
                    </p>

                </div>

            </div>

            <!-- Card 3 -->

            <div class="col-md-6 col-lg-4">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h4>Quality & Safety</h4>

                    <p>
                        Patient safety and quality service remain our highest
                        priorities in every consultation and treatment.
                    </p>

                </div>

            </div>

            <!-- Card 4 -->

            <div class="col-md-6 col-lg-4">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-emoji-smile-fill"></i>
                    </div>

                    <h4>Patient-Centred Care</h4>

                    <p>
                        Every patient is treated with dignity, compassion,
                        respect, and personalized attention throughout their
                        healthcare journey.
                    </p>

                </div>

            </div>

            <!-- Card 5 -->

            <div class="col-md-6 col-lg-4">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <h4>Timely Medical Services</h4>

                    <p>
                        We strive to reduce waiting times while ensuring
                        efficient diagnosis and quality healthcare delivery.
                    </p>

                </div>

            </div>

            <!-- Card 6 -->

            <div class="col-md-6 col-lg-4">

                <div class="why-card">

                    <div class="why-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h4>Community Commitment</h4>

                    <p>
                        We are committed to promoting healthier communities
                        through accessible healthcare and continuous health
                        education.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>








  <div class="container py-5">
      <div class="row justify-content-center align-items-center gap-4 mt-4">
        <div class="col-md-6">
          <div class="flex-image shadow-lg">
            <img
              src="Images/Stetoscope 3.jpg"
              class="img-fluid rounded"
              alt=""
            >
          </div>
        </div>

        <div class="col-md-5">
          <div class="text-center">
            <h2 class="text-success">Our Mission</h2>
          </div>
              <p class="mission-p">
                At our Medical Health Centre, our mission is to provide compassionate,
                accessible, and high-quality healthcare services that improve the
                well-being of every individual and family we serve. <br> <br>We are committed
                to delivering patient-centered care through modern medical practices,
                skilled healthcare professionals, and a culture of excellence,
                integrity, and respect. We strive to promote healthier communities by
                focusing not only on treatment but also on prevention, education, and
                early intervention. <br><br> Through continuous innovation, advanced medical
                technology, and personalized care plans, we aim to meet the unique
                health needs of our patients at every stage of life. Our dedication
                extends beyond the walls of our facility as we work to build trust,
                foster lasting relationships, and create a safe and welcoming
                environment where every patient feels valued and cared for. <br><br> By
                upholding the highest standards of medical practice and ethical
                responsibility, we seek to be a trusted partner in helping individuals
                achieve healthier, happier, and more fulfilling lives.
             </p>
        </div>
      </div>

      <div class="row justify-content-center align-items-center gap-3 mt-5">
        <div id="vision" class="col-md-5">
          <div class="text-center">
            <h2 class="text-success">Our Vision</h2>
          </div>
               <p class="vision-p">
                    Our vision is to be a leading healthcare provider recognized for
                    excellence in patient care, medical innovation, and community
                    wellness. <br><br>We aspire to create a future where quality healthcare is
                    accessible to everyone, empowering individuals and families to live
                    healthier and more productive lives. We envision a healthcare
                    environment where advanced technology, professional expertise, and
                    compassionate service work together to deliver exceptional medical
                    outcomes. <br><br>By continuously improving our services, investing in modern
                    healthcare solutions, and fostering a culture of learning and
                    innovation, we aim to set new standards in healthcare delivery. <br><br>
                    Through strong partnerships, community engagement, and a commitment to
                    preventive medicine, we seek to become a trusted center of hope,
                    healing, and wellness. Our goal is to positively impact the lives of
                    those we serve while contributing to the development of healthier
                    communities for generations to come.
               </p>
          </div>

        <div class="col-md-6">
          <div class="flex-image shadow-lg">
            <img
              src="Images/Nurse attending to preg woman 1.jpeg"
              class="img-fluid rounded"
              alt=""
            >
          </div>
        </div>
      </div>
   </div>
</main>

    <!-- Newsletter Section -->
    <section class="newsletter py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2>Subscribe to Our Newsletter</h2>
            <p class="mb-4">
              Stay updated with our latest healthcare tips, services, and
              special announcements.
            </p>

            <form>
              <div class="input-group">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email address"
                  required
                />
                <button class="btn btn-primary" type="submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">

<div class="container">

<div class="row gy-5">

<!-- Logo -->

<div class="col-lg-4 col-md-6">

<h2>

<i class="bi bi-hospital-fill footer-logo"></i>

Shamrock Medical Centre

</h2>

<p>

Providing quality healthcare through compassionate professionals,
modern equipment and patient-centered services.

</p>

</div>

<!-- Links -->

<div class="col-lg-2 col-md-6">

<h4>Quick Links</h4>

<ul>

<li><a href="index.php">Home</a></li>

<li><a href="about.php">About</a></li>

<li><a href="service.php">Services</a></li>

<li><a href="appointment.php">Appointment</a></li>

<li><a href="contact.php">Contact</a></li>

</ul>

</div>

<!-- Services -->

<div class="col-lg-3 col-md-6">

<h4>Our Services</h4>

<ul>

<li><a href="#">General Consultation</a></li>

<li><a href="#">Laboratory Services</a></li>

<li><a href="#">Pharmacy</a></li>

<li><a href="#">Emergency Care</a></li>

<li><a href="#">Maternity Care</a></li>

</ul>

</div>

<!-- Contact -->

<div class="col-lg-3 col-md-6 footer-contact">

<h4>Contact Us</h4>

<p>

<i class="bi bi-telephone-fill"></i>

+234 903 189 1178

</p>

<p>

<i class="bi bi-envelope-fill"></i>

info@shamrockmedical.com

</p>

<p>

<i class="bi bi-geo-alt-fill"></i>

Olorunda Road, Elepe, Ibadan

</p>

            <div class="social-links">
              <a
                href="https://web.facebook.com/laura.crespo.980967"
                target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

</div>

</div>

</div>

<div class="footer-bottom">

<div class="container">

<p>

© <?php echo date("Y"); ?>

Shamrock Medical Centre. All Rights Reserved.

</p>

<p>

Designed & Developed by

<span>Temitayo Akindulu</span>

</p>

</div>

</div>

</footer>
    <!-- BOOTSTRAP JAVASCRIPT BUNDLE -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
