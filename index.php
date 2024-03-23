<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Room Rover-Home</title>

  <?php
  require ('inc/links.php');
  ?>

  <!-- Swiper JS Library -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />

  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0px 25px;
      }
    }
  </style>

  <!-- Common style sheet -->

</head>

<body class="bg-light">
  <!-- header.php -->
  <?php
  require ('inc/header.php');
  ?>



  <!-- Carousel -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images\carousel\IMG_40905.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check room Availability form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-center">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Check-in</label>
              <input type="date" class="form-control" />
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Check-out</label>
              <input type="date" class="form-control" />
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Adult</label>
              <select class="form-select">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500">Children</label>
              <select class="form-select">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mt-2 mt-2">
              <button type="submit" class="btn text-white custom-bg">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Room Cards -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="images/rooms/1.jpg" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">Simple Room</h5>
            <h6 class="mb-4">₹1200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>

              <span class="badge text-bg-light text-wrap lh-base">Wi-fi
              </span>
              <span class="badge text-bg-light text-wrap lh-base">LED Television
              </span>
              <span class="badge text-bg-light text-wrap lh-base">AC </span>
              <span class="badge text-bg-light text-wrap lh-base">Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>

              <span class="badge text-bg-light text-wrap lh-base">5 Adults
              </span>
              <span class="badge text-bg-light text-wrap lh-base">4 Children
              </span>

            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-white">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="images/rooms/1.jpg" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">Simple Room</h5>
            <h6 class="mb-4">₹1200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>

              <span class="badge text-bg-light text-wrap lh-base">Wi-fi
              </span>
              <span class="badge text-bg-light text-wrap lh-base">LED Television
              </span>
              <span class="badge text-bg-light text-wrap lh-base">AC </span>
              <span class="badge text-bg-light text-wrap lh-base">Room Heater
              </span>
            </div>

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>

              <span class="badge text-bg-light text-wrap lh-base">5 Adults
              </span>
              <span class="badge text-bg-light text-wrap lh-base">4 Children
              </span>

            </div>

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-white">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="images/rooms/1.jpg" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">Simple Room</h5>
            <h6 class="mb-4">₹1200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>

              <span class="badge text-bg-light text-wrap lh-base">Wi-fi
              </span>
              <span class="badge text-bg-light text-wrap lh-base">LED Television
              </span>
              <span class="badge text-bg-light text-wrap lh-base">AC </span>
              <span class="badge text-bg-light text-wrap lh-base">Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>

              <span class="badge text-bg-light text-wrap lh-base">5 Adults
              </span>
              <span class="badge text-bg-light text-wrap lh-base">4 Children
              </span>

            </div>

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-white">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Rooms >>></a>
      </div>
    </div>
  </div>
  <!-- Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-sm-5">
      <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./images/facilities/IMG_43553.svg" alt="" width="80px" />
        <h5 class="mt-3">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./images/facilities/IMG_43553.svg" alt="" width="80px" />
        <h5 class="mt-3">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./images/facilities/IMG_43553.svg" alt="" width="80px" />
        <h5 class="mt-3">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./images/facilities/IMG_43553.svg" alt="" width="80px" />
        <h5 class="mt-3">Wi-fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white shadow py-4 my-3">
        <img src="./images/facilities/IMG_43553.svg" alt="" width="80px" />
        <h5 class="mt-3">Wi-fi</h5>
      </div>

      <!-- more facilities -->
      <div class="col-lg-12 text-center mt-5">
        <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Facilities >>></a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonials shadow">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./images/facilities/star.svg" alt="" width="30px" />
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
            saepe nesciunt magnam voluptatem magni cupiditate possimus laborum
            asperiores reiciendis nobis.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./images/facilities/star.svg" alt="" width="30px" />
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
            saepe nesciunt magnam voluptatem magni cupiditate possimus laborum
            asperiores reiciendis nobis.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./images/facilities/star.svg" alt="" width="30px" />
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
            saepe nesciunt magnam voluptatem magni cupiditate possimus laborum
            asperiores reiciendis nobis.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="./images/facilities/star.svg" alt="" width="30px" />
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
            saepe nesciunt magnam voluptatem magni cupiditate possimus laborum
            asperiores reiciendis nobis.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">Know More >>></a>
    </div>
  </div>

  <!-- Reach Us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6831.33988079307!2d77.4886322!3d31.11890445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39058c12b8cb3841%3A0xb5f727cc19511f30!2sAtal%20Bihari%20Vajpayee%20Govt%20Institute%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1710438988324!5m2!1sen!2sin"
          height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +917876592269" class="d-inline-block mb-2 text-decoration-none text-dark"><i
              class="bi bi-telephone-fill"></i> +91-7876592269</a>
          <br />
          <a href="tel: +919318974525" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91-9318974525</a>
        </div>


        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="https://www.instagram.com/_.s.hi.vam._/" class="d-inline-block mb-3">
            <span class="badge bg-light fs-6 p-2 text-dark">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <br />
          <a href="https://github.com/ankitsh474761" class="d-inline-block mb-3">
            <span class="badge bg-light fs-6 p-2 text-dark">
              <i class="bi bi-github"></i> Github
            </span>
          </a>
          <br />
          <a href="https://www.linkedin.com/in/ankit-sharma-72567220b/" class="d-inline-block">
            <span class="badge bg-light fs-6 p-2 text-dark">
              <i class="bi bi-linkedin"></i> LinkedIn
            </span>
          </a>

        </div>
      </div>
    </div>
  </div>


  <!-- footer.php -->
  <?php
  require ("inc/footer.php");
  ?>




  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Carousel Script -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 1800,
        disableOnInteraction: false,
      },
    });

    // testimonial script
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,

      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      loop: true,
      autoplay: {
        delay: 2800,
        disableOnInteraction: false,
      },
    });
  </script>
</body>

</html>