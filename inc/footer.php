<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">Room Rover</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reprehenderit, pariatur incidunt. Eveniet aperiam veritatis
                molestiae maxime ipsum excepturi. Fuga, sed.
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a>
            <br />
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a>
            <br />
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a>
            <br />
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a>
            <br />
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
            <br />
        </div>

        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow Us</h5>
            <a href="<?php 
          echo $contact_r['insta'];
          ?>" class="d-inline-block mb-2 text-dark text-decoration-none">
                <i class="bi bi-instagram me-1"></i> Instagram </a><br />
            <a href="<?php 
          echo $contact_r['git'];
          ?>" class="d-inline-block mb-2 text-dark text-decoration-none">
                <i class="bi bi-github me-1"></i> Github </a><br />
            <a href="<?php 
          echo $contact_r['ln'];
          ?>"
                class="d-inline-block text-dark text-decoration-none">
                <i class="bi bi-linkedin me-1 text-dark "></i> LinkedIn </a><br />
        </div>
    </div>
</div>


<br /><br /><br />
<br /><br /><br />

<h6 class="p-3 m-0 bg-dark text-white text-center">Designed and Developed by Ankit & Shivam.</h6>


<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
        function setActive(){
           let navbar =document.getElementById('nav-bar');
            let a_tags = navbar.getElementsByTagName('a');

            for(i=0;i<a_tags.length;i++){
                let file = a_tags[i].href.split('/').pop();
                let file_name = file.split('.')[0];
                if(document.location.href.indexOf(file_name) >= 0){
                a_tags[i].classList.add('active');
                }
            }
        }
        setActive();
    </script>