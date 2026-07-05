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
    <title>Contact</title>
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
                <a href="index.html" class="nav-link" id="home">Home</a>
              </li>

              <li class="nav-item me-3">
                <a href="about.html" class="nav-link" id="about">About</a>
              </li>

              <li class="nav-item me-3">
                <a href="service.html" class="nav-link" id="services"
                  >Services</a
                >
              </li>
              <li class="nav-item me-3">
                <a href="#" class="nav-link" id="contact">Contact</a>
              </li>

              <li class="nav-item me-3">
                <a href="blog.html" class="nav-link" id="contact">Blog Post</a>
              </li>

              <!-- <li class="nav-item">
                <a href="" class="d-md-none d-lg-inline nav-link" id="blog"
                  >Blog Post</a>
              </li> -->
            </ul>

            <div class="nav-buttons">
              <a href="appointment.html" class="btn btn-sm btn-success d-sm-none d-lg-inline"
                >Book Appointment</a
              >
              <a href="Map.html" class="btn btn-sm btn-outline-success"
                ><i class="bi bi-geo-alt-fill text-success"></i> Visit Us</a
              >
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="container" style="margin-top: 30px">
        <div class="row justify-content-between">
          <div class="col-md-8 p-5">
            <form action="" class="row g-3">
              <h3 class="text-center">Send Us A Message</h3>
              <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" />
              </div>
              <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" />
              </div>
              <div class="col-md-8">
                <label for="enailInfo" class="form-label">E-mail</label>
                <input
                  type="email"
                  class="form-control"
                  id="emailInfo"
                  required
                />
              </div>
              <div class="col-md-4">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="phoneNumber"
                  placeholder="+234 903 1891 178"
                />
              </div>
              <div class="col-md-12">
                <label for="message" class="form-label">Your Message</label>
                <textarea
                  name="text"
                  id="message"
                  rows="3"
                  class="form-control" required
                ></textarea>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-success">
                  Send Message
                </button>
              </div>
            </form>
          </div>

          <div class="col-md-4 p-5">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1977.7790838674914!2d3.9564057!3d7.5139271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039ef5d4863081b%3A0xa6feec2301d39440!2sElepe%20central%20mosque!5e0!3m2!1sen!2sng!4v1782206885989!5m2!1sen!2sng"
              width="400"
              height="450"
              style="border: 2px solid darkgreen; border-radius: 20px"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
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

    <footer class="footer mt-3">
      <div
        class="container-lg py-5 d-flex justify-content-center align-items-center"
      >
        <div class="row" style="width: 100%">
          <div class="footer-col col-md-3 col-sm-6">
            <h4>Sharmrock</h4>
            <ul>
              <li><a href="about.html">About US</a></li>
              <li><a href="service.html">Our Services</a></li>
              <li><a href="about.html">Our Mission</a></li>
              <li><a href="#">Blog Post</a></li>
            </ul>
          </div>

          <div class="footer-col col-md-3 col-sm-6">
            <h4>Get Help</h4>
            <ul>
              <li><a href="#FAQs">FAQs</a></li>
              <li><a href="appointment.html">Book Appointment</a></li>
              <li><a href="Map.html">Visit US</a></li>
              <li><a href="contact.html">Contact US</a></li>
            </ul>
          </div>

          <div class="footer-col col-md-3 col-sm-6">
            <h4>Common Services</h4>
            <ul>
              <li><a href="service.html">General Consultations</a></li>
              <li><a href="service.html">Laboratory Services</a></li>
              <li><a href="service.html">Pharmacy Services</a></li>
              <li><a href="service.html">Emergency Care</a></li>
              <li><a href="service.html">Maternity Care</a></li>
            </ul>
          </div>

          <div class="footer-col col-md-3 col-sm-6">
            <h4>Follow US</h4>
            <div class="social-links">
              <a href="https://web.facebook.com/laura.crespo.980967" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
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
