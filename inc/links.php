<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

<link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">

  
<link rel="stylesheet" href="css/style.css" />

<?php
session_start();
date_default_timezone_set("Asia/Kolkata");


require('admin/inc/db_config.php');
require('admin/inc/essentials.php');


$contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";


$values = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));


$name_q = "SELECT * FROM `settings` WHERE `sr_no`=?";
$values = [1];
$name_r = mysqli_fetch_assoc(select($name_q, $values, 'i'));

if($name_r['shutdown']){
echo<<<alertbar
<div class='bg-danger text-center p-2 fw-bold'>
<i class="bi bi-exclamation-triangle-fill"></i> Bookings are temporarily closed!
</div>
alertbar;
}



?>