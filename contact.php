<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Room Rover-Contact Us</title>

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
  </style>


  <!-- Common style sheet -->

</head>

<body class="bg-light">
  <!-- header.php -->
  <?php
  require ('inc/header.php');
  ?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="  bg-white shadow rounded p-4 ">
          <iframe class="w-100 rounded mb-4"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6831.33988079307!2d77.4886322!3d31.11890445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39058c12b8cb3841%3A0xb5f727cc19511f30!2sAtal%20Bihari%20Vajpayee%20Govt%20Institute%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1710438988324!5m2!1sen!2sin"
            height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/gZKM1dwxQq5vHCHA9" target="_blank"
            class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> Room Rover Hotel, INDIA
          </a>
          
          
          <h5 class="mt-4">Call Us</h5>
          <a href="tel: +917876592269" class="d-inline-block mb-2 text-decoration-none text-dark"><i
              class="bi bi-telephone-fill"></i> +917876592269</a>
          <br />
          <a href="tel: +919318974525" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +919318974525</a>
         
         
         
            <h5 class="mt-4">Email</h5>
          <a href="mailto:shivam1234snr@gmail.com " class="d-inline-block text-decoration-none text-dark"> <i
              class="bi bi-envelope-fill"></i> shivam1234snr@gmail.com</a>
          <br>
          
          
          
              <h5 class="mt-4">Follow Us</h5>
          <a href="https://www.instagram.com/_.s.hi.vam._/" class="d-inline-block  text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>
            
          </a>
       
          <a href="https://github.com/ankitsh474761" class="d-inline-block  text-dark fs-5 me-2">
            <i class="bi bi-github"></i> 
           
          </a>
          
          <a href="https://www.linkedin.com/in/ankit-sharma-72567220b/" class="d-inline-block text-dark fs-5 ">
            <i class="bi bi-linkedin"></i>
            
          </a>


        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">

        <div class=" bg-white shadow rounded p-4  ">
          <form>
            <h5>Send a message</h5>
            <div class="mt-4">
                        <label class="form-label" style="font-weight:500;">Name: </label>
                        <input type="text" class="form-control" />
                    </div>
            <div class="mt-4">
                        <label class="form-label" style="font-weight:500;">Email: </label>
                        <input type="email" class="form-control" />
                    </div>
            <div class="mt-4">
                        <label class="form-label" style="font-weight:500;">Subject: </label>
                        <input type="text" class="form-control" />
                    </div>
            <div class="mt-4">
                        <label class="form-label" style="font-weight:500;">Message: </label>
                        <textarea class="form-control" rows="5" style="resize:none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
         
      </div>


    </div>
  </div>





  <!-- footer.php -->
  <?php
  require ("inc/footer.php");
  ?>




</body>

</html>