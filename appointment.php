<?php
session_start();
?>

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
    <link rel="stylesheet" href="./CSS/appointment.css" />
    <link rel="stylesheet" href="./CSS/index.css" />
    
    <title>Book Appointment</title>

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
              <a href="#" class="btn btn-sm btn-success d-sm-none d-lg-inline"
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
      <section class="appointment-section">
        <!-- Background Video -->
        <video 
        autoplay 
        preload="auto" 
        muted 
        loop 
        playsinline 
        poster="Images/consultation.jpeg"
        class="bg-video">
          <source src="Images/hospital-video.mp4" type="video/mp4"/>
        </video>

        <!-- Green Overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="container position-relative">
          <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-5 text-white">
              <h5 class="text-light">Your Health, Our Priority</h5>
              <h1 class="display-3 fw-bold">Book Your Appointment</h1>
              <p class="lead">
                Professional healthcare services with experienced doctors and
                modern facilities.
              </p>
            </div>

            <div class="col-lg-6">
              <!-- <div class="appointment-form">
                <h3 class="mb-4">Book an Appointment</h3>

                <form>
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Full Name"
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email Address"
                    />
                  </div>

                  <div class="mb-3">
                    <input
                      type="tel"
                      class="form-control"
                      placeholder="Phone Number"
                    />
                  </div>

                  <div class="mb-3">
                    <input type="date" class="form-control" />
                  </div>

                  <div class="mb-3">
                    <select class="form-select">
                      <option>Select Department</option>
                      <option>Cardiology</option>
                      <option>Neurology</option>
                      <option>Pediatrics</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <textarea name="symptoms" id="" rows="5" placeholder="Explain how you feel presently" required></textarea>
                  </div>

                  <button class="btn btn-success w-100 py-3">
                    Book Appointment
                  </button>
                </form>
              </div> -->
            
            <!-- Form Card -->
                <div class="appointment-card">
                  <?php
                    if (isset($_GET['success'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your appointment has been booked successfully. We will contact you shortly.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php
                    }
                  ?>

                  <?php if (isset($_SESSION["error"])) : ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-triangle-fill me-2"></i>
    <?php
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
    ?>

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>
</div>

<?php endif; ?>


<?php if (isset($_SESSION["success"])) : ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle-fill me-2"></i>
    <?php
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
    ?>

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>
</div>

<?php endif; ?>
                    <form action="process/book_appointment.php" method="POST" id="appointmentForm">
                        
                        <!-- Full Name -->
                        <div class="input-group-custom">
                            <i class="bi bi-person input-icon"></i>
                            <input type="text" class="form-control" name="full_name" id="fullName" placeholder="Full Name" required>
                            <label class="floating-label" for="fullName">Full Name</label>
                        </div>

                        <!-- Email Address -->
                        <div class="input-group-custom">
                            <i class="bi bi-envelope input-icon"></i>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                            <label class="floating-label" for="email">Email Address</label>
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group-custom">
                            <i class="bi bi-telephone input-icon"></i>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                            <label class="floating-label" for="phone">Phone Number</label>
                        </div>

                        <!-- Age -->
                        <div class="input-group-custom">
                            <i class="bi bi-calendar input-icon"></i>
                            <input type="number" class="form-control" name="age" id="age" placeholder="Age" min="0" max="120" required>
                            <label class="floating-label" for="age">Age</label>
                        </div>

                        <!-- Gender -->
                        <div class="input-group-custom">
                            <i class="bi bi-gender-ambiguous input-icon"></i>
                            <select class="form-select" name="gender" id="gender" required>
                                <option value="" disabled selected></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                                <option value="prefer-not-to-say">Prefer not to say</option>
                            </select>
                            <label class="floating-label" for="gender">Gender</label>
                        </div>

                        <!-- Appointment Date -->
                        <div class="input-group-custom">
                            <i class="bi bi-calendar input-icon"></i>
                            <input type="date" class="form-control" name="appointment_date" id="appointmentDate" placeholder="mm/dd/yyyy" required>
                            <label class="floating-label" for="appointmentDate">Appointment Date</label>
                            <i class="bi bi-calendar date-icon-right input-icon"></i>
                        </div>

                        <!-- Preferred Time -->
                        <div class="input-group-custom">
                            <i class="bi bi-clock input-icon"></i>
                            <input type="time" class="form-control" name="appointment_time" id="preferredTime" placeholder="--:-- --" required>
                            <label class="floating-label" for="preferredTime">Preferred Time</label>
                            <i class="bi bi-clock time-icon input-icon"></i>
                        </div>

                        <!-- Department -->
                        <div class="input-group-custom">
                            <i class="bi bi-building input-icon"></i>
                            <select class="form-select" name="department" id="department" required>
                                <option value="" disabled selected></option>
                                <option value="cardiology">Cardiology</option>
                                <option value="dermatology">Dermatology</option>
                                <option value="neurology">Neurology</option>
                                <option value="orthopedics">Orthopedics</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="general-medicine">General Medicine</option>
                            </select>
                            <label class="floating-label" for="department">Select Department</label>
                        </div>

                        <!-- Preferred Doctor (Optional) -->
                        <div class="input-group-custom">
                            <i class="bi bi-person input-icon"></i>
                            <select class="form-select" name="doctor" id="preferredDoctor">
                                <option value="" disabled selected></option>
                                <option value="dr-smith">Dr. Smith</option>
                                <option value="dr-johnson">Dr. Johnson</option>
                                <option value="dr-williams">Dr. Williams</option>
                                <option value="dr-brown">Dr. Brown</option>
                                <option value="dr-davis">Dr. Davis</option>
                            </select>
                            <label class="floating-label" for="preferredDoctor">Preferred Doctor (Optional)</label>
                        </div>

                        <!-- Symptoms / Reason -->
                        <div class="input-group-custom">
                            <i class="bi bi-chat-left-text input-icon"></i>
                            <textarea class="form-control" name="message" id="symptoms" placeholder="Briefly describe your symptoms or reason for your visit" required></textarea>
                            <label class="floating-label" for="symptoms">Briefly describe your symptoms or reason for your visit</label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-book">
                            <i class="bi bi-calendar-check"></i>
                            Book Appointment
                        </button>

                        <!-- Security Note -->
                        <div class="security-note">
                            <i class="bi bi-lock-fill"></i>
                            <span>Your information is secure and will never be shared with third parties.</span>
                        </div>

                    </form>
                </div>
            </div>
          </div>
        </div>
      </section>
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
