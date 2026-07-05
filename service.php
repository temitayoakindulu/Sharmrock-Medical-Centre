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
    <title>Sharmrock Service</title>
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
                <a href="#" class="nav-link" id="services">Services</a>
              </li>
              <li class="nav-item me-3">
                <a href="contact.html" class="nav-link" id="contact">Contact</a>
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
      <section class="services mt-5">
        <div class="text-center">
          <h3 class="text-success" style="font-size: 18px">
            Some Of Our Medical Services
          </h3>
        </div>
        <div class="container-xl">
          <figure class="figure">
            <img
              src="Images/Stetoscope 1.jpg"
              class="figure-img img-fluid rounded"
              alt="..."
            />
            <figcaption class="figure-caption">
              
            </figcaption>
          </figure>

          <div class="row justify-content-center align-items-center">
            <div class="col col-lg-6 d-flex justify-content-center">
              <div class="card service-card border-0" style="width: 30rem">
                <img
                  src="Images/consultation.jpeg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">General Consultations</h5>
                  <p class="text-muted card-text">
                    Receive expert medical advice, diagnosis, and treatment from
                    experienced healthcare professionals for a wide range of
                    health concerns.
                  </p>
                  <span class="d-block text-center">
                    <a href="#" class="btn btn-sm btn-outline-success"
                      >Learn More <i class="bi bi-arrow-right text-success"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="mt-5 col col-lg-6 d-flex justify-content-center">
              <div class="card service-card border-0" style="width: 30rem">
                <img src="Images/lab.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Laboratory Services</h5>
                  <p class="text-muted card-text">
                    We provide accurate and timely diagnostic testing using
                    modern laboratory equipment to support effective treatment
                    decisions.
                  </p>
                  <span class="d-block text-center">
                    <a href="#" class="btn btn-sm btn-outline-success"
                      >Learn More <i class="bi bi-arrow-right text-success"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="mt-5 col col-lg-6 d-flex justify-content-center">
              <div class="card service-card border-0" style="width: 30rem">
                <img src="Images/pharmacy.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Pharmacy Services</h5>
                  <p class="text-muted card-text">
                    Access quality medications and professional pharmaceutical
                    guidance to ensure safe and effective treatment.
                  </p>
                  <span class="d-block text-center">
                    <a href="#" class="btn btn-sm btn-outline-success"
                      >Learn More <i class="bi bi-arrow-right text-success"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="mt-5 col col-lg-6 d-flex justify-content-center">
              <div class="card service-card border-0" style="width: 30rem">
                <img
                  src="Images/emergency.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Emergency Care</h5>
                  <p class="text-muted card-text">
                    Our emergency unit is equipped to provide immediate medical
                    attention for urgent and life-threatening conditions.
                  </p>
                  <span class="d-block text-center">
                    <a href="#" class="btn btn-sm btn-outline-success"
                      >Learn More <i class="bi bi-arrow-right text-success"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="mt-5 col col-lg-6 d-flex justify-content-center">
              <div class="card service-card border-0" style="width: 30rem">
                <img src="Images/antenata.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Maternity and Antenatal Care</h5>
                  <p class="text-muted card-text">
                    Comprehensive care for expectant mothers, including prenatal
                    checkups, maternal health monitoring, and delivery support.
                  </p>
                  <span class="d-block text-center">
                    <a href="#" class="btn btn-sm btn-outline-success"
                      >Learn More <i class="bi bi-arrow-right text-success"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>

            <div class="mt-5 col col-lg-6 d-flex justify-content-center">
              <div class="card service-card border-0" style="width: 30rem">
                <img src="Images/vaccine.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Vaccination and Preventive Care</h5>
                  <p class="text-muted card-text">
                    Protect yourself and your family through routine
                    immunizations, health screenings, and preventive healthcare
                    services.
                  </p>
                  <span class="d-block text-center">
                    <a href="#" class="btn btn-sm btn-outline-success"
                      >Learn More <i class="bi bi-arrow-right text-success"></i
                    ></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-lg mt-5">
          <div class="row justify-content-center align-items-center p-3">
            <div
              class="col-md-5 mt-4 d-flex flex-column justify-content-center align-items-center"
            >
              <img
                src="Images/Nurse attending to preg woman 1.jpeg"
                alt=""
                style="width: 100%"
                class="rounded-pill"
              />

              <small
                class="border-start border-success m-3 p-1 border-3 d-none d-md-block d-lg-none"
                >Best Health Care Service Provider...</small
              >
              <img
                src="Images/Stetoscope 4.jpg"
                alt=""
                style="width: 100%"
                class="rounded-pill d-none d-md-block d-lg-none"
              />
            </div>

            <div class="col-md-7 mt-4">
              <div class="row justify-content-center">
                <h1 class="text-center fw-bold">Why Patients Choose Us</h1>

                <div class="col-lg-6 mt-3 shadow-sm">
                  <div class="text-start">
                    <i class="bi bi-person-hearts fs-1 ms-3 text-success"></i>
                    <h3 class="text-success">Expert Medical Team</h3>
                    <p class="text-muted fw-bolder">
                      Our experienced doctors, nurses, and specialists work
                      together to provide accurate diagnosis and quality
                      treatment for every patient.
                    </p>
                  </div>
                </div>

                <div class="col-lg-6 mt-3 shadow-sm">
                  <div class="text-start">
                    <i class="bi bi-hospital fs-1 ms-3 text-success"></i>
                    <h3 class="text-success">Emergency Care</h3>
                    <p class="text-muted fw-bolder">
                      We provide round-the-clock emergency services with fast
                      response times and modern medical equipment.
                    </p>
                  </div>
                </div>

                <div class="col-lg-6 mt-3 shadow-sm">
                  <div class="text-start">
                    <i class="bi bi-hdd-network fs-1 ms-3 text-success"></i>
                    <h3 class="text-success">Modern Medical Facilities</h3>
                    <p class="text-muted fw-bolder">
                      Our hospital is equipped with advanced technology and
                      comfortable facilities to ensure effective patient care.p>
                    </p>
                  </div>
                </div>

                <div class="col-lg-6 mt-3 shadow-sm">
                  <div class="text-start">
                    <i class="bi bi-calendar2-check fs-1 ms-3 text-success"></i>
                    <h3 class="text-success">Easy Appointment Booking</h3>
                    <p class="text-muted fw-bolder">
                      Patients can quickly schedule consultations and receive
                      support from our friendly healthcare staff.
                    </p>
                  </div>
                </div>
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
