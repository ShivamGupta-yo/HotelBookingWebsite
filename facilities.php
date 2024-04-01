<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facilities</title>

    <?php 
    require('./inc/links.php');
    ?>

    <!-- Swiper JS Library -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
<style>
  .h-line{
  width: 150px;
  margin: 0 auto;
  height: 1.7px; 
}
.pop:hover{
  border-top-color: #2ec1ac !important;
  cursor: pointer;
  transform: scale(1.03);
  transition: all 0.3s;
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
    <h2 class= "text-center fw-bold h-font">OUR FACILITIES</h2>
   <div class="h-line bg-dark"></div>
   
   </div>

   <div class="container">
    <div class="row">

    <?php 
    $res = selectAll('facilities');
    $path = FACILITIES_IMG_PATH;
    while($row = mysqli_fetch_assoc($res)){
      echo<<<data
      <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class=" pop bg-white shadow rounded border-top border-4 p-4 border-dark ">
        <div class="d-flex align-items-center mb-2">

          <img src="$path$row[icon]" alt="" width="40px">
          <h5 class="m-0 ms-3">$row[name]</h5>
        </div>
          <p>$row[description]</p>
        </div>
    </div>
    data;
    }
    
    ?>
     
    
      
    </div>
   </div>
  
   

    

    <!-- footer.php -->
    <?php 
    require( "inc/footer.php");
    ?>

    


  </body>
</html>
