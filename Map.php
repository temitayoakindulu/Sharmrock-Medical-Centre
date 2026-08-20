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
    <title>Map</title>
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
                <a href="about.php" class="nav-link" id="about">About</a>
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
              <a href="appointment.php" class="btn btn-sm btn-success d-sm-none d-lg-inline"
                >Book Appointment</a
              >
              <a href="#" class="btn btn-sm btn-outline-success"
                ><i class="bi bi-geo-alt-fill text-success"></i> Visit Us</a
              >
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div>
        <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1977.7790838674914!2d3.9564057!3d7.5139271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039ef5d4863081b%3A0xa6feec2301d39440!2sElepe%20central%20mosque!5e0!3m2!1sen!2sng!4v1782206885989!5m2!1sen!2sng"
              width="100%"
              height="800px"
              
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
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