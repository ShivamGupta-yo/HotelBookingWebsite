<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CONFIRM BOOKING</title>

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



  <?php
  /*
  Check room id from url is present or not
  Shutdown mode is active or not
  User is logged in or not
   */
  if (!isset($_GET['id']) || $name_r['shutdown'] == true) {
    redirect('rooms.php');
  } else if (!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
    redirect('rooms.php');
  }

  // filter and get room and user data

  $data = filteration($_GET);
  $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND `status`=? AND `remove`=?", [$data['id'], 1, 0], 'iii');

  if (mysqli_num_rows($room_res) == 0) {
    redirect('rooms.php');
  }
  $room_data = mysqli_fetch_assoc($room_res);


  $_SESSION['room'] = [
    "id" => $room_data['id'],
    "name" => $room_data['name'],
    "price" => $room_data['price'],
    "payment" => null,
    "available" => false,
  ];

  $user_res = select("SELECT * FROM `user_cred` WHERE `id`=? LIMIT 1", [$_SESSION['uId']], 'i');
  $user_data = mysqli_fetch_assoc($user_res);

  ?>


  <div class="container">
    <div class="row">

      <div class="col-12 my-5 mb-4 px-4">
        <h2 class=" fw-bold ">CONFIRM BOOKING</h2>
        <div style="font-size: 14px;">
          <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
          <span class="text-secondary"> > </span>
          <a href="rooms.php" class="text-secondary text-decoration-none">ROOMS</a>
          <span class="text-secondary"> > </span>
          <a href="#" class="text-secondary text-decoration-none">CONFIRM</a>
        </div>

      </div>

      <div class="col-lg-7 col-md-12 px-4 ">

        <?php
        $room_thumb = ROOMS_IMG_PATH . "thumbnail.jpg";
        $thumb_q = mysqli_query($con, "SELECT * FROM `room_images` WHERE `room_id`='$room_data[id]' AND `thumb`='1' ");

        if (mysqli_num_rows($thumb_q) > 0) {
          $thumb_res = mysqli_fetch_assoc($thumb_q);
          $room_thumb = ROOMS_IMG_PATH . $thumb_res['image'];
        }
        echo <<<data
         <div class="card p-3 shadow-sm rounded">
         <img src='$room_thumb' class='img-fluid rounded mb-3'>
         <h5>$room_data[name]</h5>
         <h6>₹$room_data[price] per night</h6>
         </div>
         data;

        ?>
      </div>

      <div class="col-lg-5 col-md-12 px-4 mt-sm-3">
        <div class="card mb-4 border-0 shadow-sm rounded-3">
          <div class="card-body">
            <form action="Payment.php" autocomplete="off" id="booking_form">
              <h6 class="mb-3">BOOKING DETAILS</h6>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label ">Name:</label>
                  <input type="text" value="<?php echo $user_data['name'] ?>" name="name" class="form-control text-left" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label ">Phone Number:</label>
                  <input type="text" value="<?php echo $user_data['phonenum'] ?>" name="phonenum" class="form-control" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label class="form-label ">Address:</label>
                  <textarea name="address" class="form-control" rows="1" required style="resize: none;"><?php echo $user_data['address'] ?></textarea>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label ">Check-in:</label>
                  <input type="date" onchange="check_availability()" name="checkin" class="form-control" required>
                </div>
                <div class="col-md-6 mb-4">
                  <label class="form-label ">Check-out:</label>
                  <input type="date" onchange="check_availability()" name="checkout" class="form-control" required>
                </div>
                <div class="col-12">
                  <div class="spinner-border text-info mb-3 d-none" role="status" id="info_loader">
                    <span class="visually-hidden">Loading...</span>
                  </div>

                  <h6 class="mb-3 text-danger" id="pay_info">Provide Check-in and Check-out Date!</h6>

                  <button name="pay_now" class="btn w-100 text-white custom-bg mb-1" disabled>PAY NOW</button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>






    </div>

  </div>






  <!-- footer.php -->
  <?php
  require("inc/footer.php");
  ?>

  <script>
    let booking_form = document.getElementById('booking_form');
    let info_loader = document.getElementById('info_loader');
    let pay_info = document.getElementById('pay_info');

    function check_availability() {
      let checkin_val = booking_form.elements['checkin'].value;
      let checkout_val = booking_form.elements['checkout'].value;


      booking_form.elements['pay_now'].setAttribute('disabled', true);

      if (checkin_val != '' && checkout_val != '') {
        pay_info.classList.add('d-none');
        pay_info.classList.replace('text-dark','text-danger');
        info_loader.classList.remove('d-none');
        let data = new FormData();
        data.append('check_availability', '');
        data.append('check_in', checkin_val);
        data.append('check_out', checkout_val);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/confirm_booking.php", true);

        xhr.onload = function() {
            let data = JSON.parse(this.responseText);
            if(data.status == 'check_in_out_equal'){
              pay_info.innerText = 'You cannot check-out on the same day!';
            }else if(data.status=='check_out_earlier'){
              pay_info.innerText = "Check-out date can't be earlier than check-in date!";
            }else if(data.status=='unavailable'){
              pay_info.innerText = "Room not available for these dates!";
            }else{
              pay_info.innerHTML= "Number of days: "+data.days+"<br>Total Amount to Pay: ₹"+data.payment;
              pay_info.classList.replace('text-danger','text-dark');
              booking_form.elements['pay_now'].removeAttribute('disabled');
            }
            pay_info.classList.remove('d-none');
            info_loader.classList.add('d-none');
        }
        xhr.send(data);
      }
    }

    
  </script>




</body>

</html>