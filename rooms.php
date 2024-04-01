<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ROOMS</title>

  <?php
  require('./inc/links.php');
  ?>

  <!-- Swiper JS Library -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <style>
    .h-line {
      width: 150px;
      margin: 0 auto;
      height: 1.7px;
    }
  </style>


  <!-- Common style sheet -->

</head>

<body class="bg-light">
  <!-- header.php -->
  <?php
  require('inc/header.php');
  ?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-In</label>
                <input type="date" class="form-control mb-3">
                <label class="form-label">Check-Out</label>
                <input type="date" class="form-control">
              </div>

              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input me-1">
                  <label class="form-check-label" for="f1">facility one</label>

                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input me-1">
                  <label class="form-check-label" for="f2">facilitytwo</label>

                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input me-1">
                  <label class="form-check-label" for="f3">facility three</label>

                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f4" class="form-check-input me-1">
                  <label class="form-check-label" for="f4">facility four</label>

                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f5" class="form-check-input me-1">
                  <label class="form-check-label" for="f5">facility five</label>

                </div>


              </div>

              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label">Adults</label>
                    <input type="number" class="form-control">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control">
                  </div>
                </div>


              </div>
            </div>
          </div>
        </nav>

      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>


            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge text-bg-light text-wrap lh-base">2 Beds
                </span>
                <span class="badge text-bg-light text-wrap lh-base">1 Bathroom
                </span>

                <span class="badge text-bg-light text-wrap lh-base">Balcony
                </span>
                <span class="badge text-bg-light text-wrap lh-base">3 Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>

                <span class="badge text-bg-light text-wrap lh-base">Wi-fi
                </span>
                <span class="badge text-bg-light text-wrap lh-base">LED Television
                </span>
                <span class="badge text-bg-light text-wrap lh-base">AC </span>
                <span class="badge text-bg-light text-wrap lh-base">Room Heater
                </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>

                <span class="badge text-bg-light text-wrap lh-base">5 Adults
                </span>
                <span class="badge text-bg-light text-wrap lh-base">4 Children
                </span>

              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class='mb-4'>₹1200 per night</h6>
              <a href="#" class="btn btn-sm text-white custom-bg mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark w-100">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>


            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge text-bg-light text-wrap lh-base">2 Beds
                </span>
                <span class="badge text-bg-light text-wrap lh-base">1 Bathroom
                </span>

                <span class="badge text-bg-light text-wrap lh-base">Balcony
                </span>
                <span class="badge text-bg-light text-wrap lh-base">3 Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>

                <span class="badge text-bg-light text-wrap lh-base">Wi-fi
                </span>
                <span class="badge text-bg-light text-wrap lh-base">LED Television
                </span>
                <span class="badge text-bg-light text-wrap lh-base">AC </span>
                <span class="badge text-bg-light text-wrap lh-base">Room Heater
                </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>

                <span class="badge text-bg-light text-wrap lh-base">5 Adults
                </span>
                <span class="badge text-bg-light text-wrap lh-base">4 Children
                </span>

              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class='mb-4'>₹1200 per night</h6>
              <a href="#" class="btn btn-sm text-white custom-bg mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark w-100">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>


            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge text-bg-light text-wrap lh-base">2 Beds
                </span>
                <span class="badge text-bg-light text-wrap lh-base">1 Bathroom
                </span>

                <span class="badge text-bg-light text-wrap lh-base">Balcony
                </span>
                <span class="badge text-bg-light text-wrap lh-base">3 Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>

                <span class="badge text-bg-light text-wrap lh-base">Wi-fi
                </span>
                <span class="badge text-bg-light text-wrap lh-base">LED Television
                </span>
                <span class="badge text-bg-light text-wrap lh-base">AC </span>
                <span class="badge text-bg-light text-wrap lh-base">Room Heater
                </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>

                <span class="badge text-bg-light text-wrap lh-base">5 Adults
                </span>
                <span class="badge text-bg-light text-wrap lh-base">4 Children
                </span>

              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class='mb-4'>₹1200 per night</h6>
              <a href="#" class="btn btn-sm text-white custom-bg mb-2 w-100">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark w-100">More Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>





  <!-- footer.php -->
  <?php
  require("inc/footer.php");
  ?>




</body>

</html>