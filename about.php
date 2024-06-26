<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About</title>

  <?php
  require ('./inc/links.php');
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

    .box:hover {
      border-top-color: #2ec1ac !important;
    }
  </style>


  <!-- Common style sheet -->

</head>

<body class="bg-light">
  <!-- header.php -->
  <?php
  require ('inc/header.php');
  ?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Your perfect stay starts here. </p>
  </div>


  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Ankit Sharma & Shivam Gupta.</h3>
        <p>We are passionate about travel and helping people find the perfect place to stay. Whether you're a business traveler seeking a comfortable work environment or a family on an adventure, we believe there's a hotel out there waiting to make your trip unforgettable.Feel free to contact us. </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1 order-md-2">
        <img src="images/about/admin.jpg" width="500px" class="rounded shadow " height="400px" alt="">


      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS </h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">1200+ CUSTOMERS</h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">1200+ REVIEWS</h4>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ STAFFS</h4>
        </div>

      </div>
    </div>

  </div>


  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">

    <?php 
    $about_r = selectAll('team_details');
    $path = ABOUT_IMG_PATH;
    while($row = mysqli_fetch_assoc($about_r)){
      echo <<<data
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
      <img src="$path$row[picture]" class="w-100" height="500px" alt="">
      <h5 class="mt-2">$row[name]</h5>
    </div>
    data;
    }
    ?>
    
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>
 



  <!-- footer.php -->
  <?php
  require ("inc/footer.php");
  ?>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
   
    spaceBetween: "40",
    pagination: {
      el: ".swiper-pagination",
    },
    loop: true,
        autoplay: {
          delay: 1800,
          disableOnInteraction: false,
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
  });
</script>


</body>

</html>