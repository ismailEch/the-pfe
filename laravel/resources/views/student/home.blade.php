<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PFE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> 
    <!-- Spinner End -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
      <!-- Navbar Start -->
      <nav
        class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
      >
        <a href="" class="navbar-brand p-0">
          <h1 class="text-primary m-0">
            <i class="fa fa-map-marker-alt me-3"></i>FINDLOG
          </h1>
        </a>
        <!-- NAVBAR TOGGLER -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">About</a>
                <a href="" class="nav-item nav-link">Services</a>
                <a href="" class="nav-item nav-link">Houses</a>
                <a href="" class="nav-item nav-link">Process</a>
            </div>

            @if (Route::has('login'))
            @auth
                <a href="" class="nav-item nav-link">My Reservation</a>
                <x-app-layout>
                </x-app-layout> 
            @else
            <a href="{{route('login')}}" class="btn btn-primary rounded-pill py-2 px-4 mx-1">Log In</a>
            <a href="{{route('register')}}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            @endauth
        @endif
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Start -->
      <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
          <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
              <h1 class="display-3 text-white mb-3 animated slideInDown">
                Find an accommodation or rental With Us
              </h1>
              <p class="fs-4 text-white mb-4 animated slideInDown">
                Are you looking for an accomodation or a rental near the FPO ?
                then you are in the right place
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div id="about" class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="img/about.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <h6 class="section-title bg-white text-start text-primary pe-3">
              About Us
            </h6>
            <h1 class="mb-4">
              Welcome to <span class="text-primary">FINDLOG</span>
            </h1>
            <p class="mb-4">
              Welcome to FINDLOG,we firmly believe that every student deserves
              housing that fits their needs and lifestyle.
            </p>
            <p class="mb-4">
              Our mission is to simplify and streamline the process of finding
              housing for students by providing a user-friendly and efficient
              platform that caters to their specific needs.
            </p>
            <p class="mb-4">We can provide you:</p>
            <div class="row g-3 pb-4">
              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="border rounded p-1">
                  <div class="border rounded text-center p-4">
                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                    <h2 class="mb-1" data-toggle="counter-up">120</h2>
                    <p class="mb-0">Rooms</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="border rounded p-1">
                  <div class="border rounded text-center p-4">
                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                    <h2 class="mb-1" data-toggle="counter-up">12</h2>
                    <p class="mb-0">Staffs</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="border rounded p-1">
                  <div class="border rounded text-center p-4">
                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                    <h2 class="mb-1" data-toggle="counter-up">12</h2>
                    <p class="mb-0">Clients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Service Start // No touch -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Services
          </h6>
          <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-home text-primary mb-4"></i>
                <h5>Extensive Listings</h5>
                <p>
                  Explore a wide selection of housing options tailored to suit
                  the needs and preferences of students. From cozy apartments to
                  spacious shared houses.<br />We have something for everyone
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-search text-primary mb-4"></i>
                <h5>Advanced Search</h5>
                <p>
                  Utilize our advanced search filters to narrow down your
                  housing options based on criteria such as price range ,
                  amenities and more other criterias.<br />Find the perfect
                  place to call home with ease.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-clock text-primary mb-4"></i>
                <h5>24/7 Support</h5>
                <p>
                  Our dedicated customer support team is available
                  round-the-clock to assist you with any queries or concerns you
                  may have.Whether you need help navigating the platform or
                  resolving an issue .We're here to help
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fas fa-3x fa-star text-primary mb-4"></i>
                <h5>User Reviews</h5>
                <p>
                  Read reviews and ratings from fellow students to make informed
                  decisions about your accomodation choices.Get insights from
                  others who have lived in the properties you're interested in.
                </p>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h5>WorldWide Tours</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                <h5>Hotel Reservation</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                <h5>Travel Guides</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                <h5>Event Management</h5>
                <p>
                  Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                  amet diam
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Accomodations Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Houses
          </h6>
          <h1 class="mb-5">Explore Our Houses</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="room-item shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="img/package-1.jpg" alt="" />
                <small
                  class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                  >$100/Night</small
                >
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0">Junior Suite</h5>
                  <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <small class="border-end me-3 pe-3"
                    ><i class="fa fa-bed text-primary me-2"></i>3 Rooms</small
                  >
                  <small class="border-end me-3 pe-3"
                    ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                  >
                  <small
                    ><i class="fa fa-wifi text-primary me-2"></i>Wifi</small
                  >
                </div>
                <p class="text-body mb-3">
                  You cannot book an entire accommodation <br />Click and book a
                  room.
                </p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                    >View Rooms</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="room-item shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="img/package-2.jpg" alt="" />
                <small
                  class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                  >$100/Night</small
                >
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0">Executive Suite</h5>
                  <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <small class="border-end me-3 pe-3"
                    ><i class="fa fa-bed text-primary me-2"></i>3 Rooms</small
                  >
                  <small class="border-end me-3 pe-3"
                    ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                  >
                  <small
                    ><i class="fa fa-wifi text-primary me-2"></i>Wifi</small
                  >
                </div>
                <p class="text-body mb-3">
                  You cannot book an entire accommodation <br />Click and book a
                  room.
                </p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                    >View Rooms</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="room-item shadow rounded overflow-hidden">
              <div class="position-relative">
                <img class="img-fluid" src="img/package-3.jpg" alt="" />
                <small
                  class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                  >$100/Night</small
                >
              </div>
              <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="mb-0">Super Deluxe</h5>
                  <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <small class="border-end me-3 pe-3"
                    ><i class="fa fa-bed text-primary me-2"></i>3 Rooms</small
                  >
                  <small class="border-end me-3 pe-3"
                    ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                  >
                  <small
                    ><i class="fa fa-wifi text-primary me-2"></i>Wifi</small
                  >
                </div>
                <p class="text-body mb-3">
                  You cannot book an entire accommodation <br />Click and book a
                  room.
                </p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-sm btn-primary rounded py-2 px-4" href=""
                    >View Rooms</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center wow fadeIn" data-wow-delay="0.5s">
          <a class="btn btn-primary py-3 px-5 mt-5 shadow" href=""
            >View More Houses</a
          >
        </div>
      </div>
    </div>
    <!-- Accomodations End -->

    <!-- Process Start // No touch -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Process
          </h6>
          <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fas fa-hand-pointer fa-3x text-white"></i>
              </div>
              <h5 class="mt-4">Choose The Offer</h5>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Browse through available listings and select the accomodation
                offer that best fits your needs and preferences.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fas fa-handshake fa-3x text-white"></i>
              </div>
              <h5 class="mt-4">Meet and Pay</h5>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Arrange a meeting with the landlord or proprety manager to
                finalize the rental agreement and make the necessary payments
                securely.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fas fa-key fa-3x text-white"></i>
              </div>
              <h5 class="mt-4">Take the keys</h5>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Once the payment is completed, collect the keys to your new
                accomodation and get ready to move in.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Process End -->

    <!-- Footer Start // No touch -->
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
