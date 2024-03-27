<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Room Rover-Contact Us</title>

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
    <h2 class="text-center fw-bold h-font">CONTACT US</h2>
    <div class="h-line bg-dark"></div>

  </div>
 
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="  bg-white shadow rounded p-4 ">
          <iframe class="w-100 rounded mb-4" src="<?php echo $contact_r['iframe']; ?>" height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="<?php echo $contact_r['gmap']; ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']; ?>
          </a>


          <h5 class="mt-4">Call Us</h5>
          <a href="tel: +<?php echo $contact_r['pn1']; ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']; ?></a>
          <br />
          <?php
          if($contact_r['pn2']!=''){

          
          echo <<<data
            <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a>
            data;
          }
          ?>


          <h5 class="mt-4">Email</h5>
          <a href="mailto:<?php echo $contact_r['email']; ?>" class="d-inline-block text-decoration-none text-dark"> <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']; ?></a>
          <br>



          <h5 class="mt-4">Follow Us</h5>
          <a href="<?php echo $contact_r['insta']; ?>" class="d-inline-block  text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>

          </a>

          <a href="<?php echo $contact_r['git']; ?>" class="d-inline-block  text-dark fs-5 me-2">
            <i class="bi bi-github"></i>

          </a>

          <a href="<?php echo $contact_r['ln']; ?>" class="d-inline-block text-dark fs-5 ">
            <i class="bi bi-linkedin"></i>

          </a>


        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">

        <div class=" bg-white shadow rounded p-4  ">
          <form method="POST">
            <h5>Send a message</h5>
            <div class="mt-4">
              <label class="form-label" style="font-weight:500;">Name: </label>
              <input name = "name" type="text" class="form-control" required/>
            </div>
            <div class="mt-4">
              <label class="form-label" style="font-weight:500;">Email: </label>
              <input type="email" class="form-control" name="email" required/>
            </div>
            <div class="mt-4">
              <label class="form-label" style="font-weight:500;">Subject: </label>
              <input type="text" class="form-control" name="subject"  required/>
            </div>
            <div class="mt-4">
              <label class="form-label" style="font-weight:500;">Message: </label>
              <textarea class="form-control" rows="5" style="resize:none;" name="message" required></textarea>
            </div>
            <button type="submit" name="send" class="btn text-white custom-bg mt-3">SEND</button>
          </form>

        </div>


      </div>
    </div>
  </div>


  <?php 
  if(isset($_POST['send'])){
$frm_data = filteration($_POST);

$q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
$values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

$res = insert($q,$values,"ssss");
if($res==1){
  alert('success','Message Sent Successfully!');

}else{
  alert('error', 'Error Sending Message!');
}
  }
  ?>



    <!-- footer.php -->
    <?php
    require("inc/footer.php");
    ?>




</body>

</html>