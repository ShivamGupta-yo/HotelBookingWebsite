<?php
require('inc/links.php');
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Users</title>
    <?php require('inc/links.php'); ?>

    <style>
        .custom-alert {
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php');
    ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">USERS</h3>



                <div class="card border-0 shadow-sm mb-4">
                    <div class=" card-body">

                        <div class=" text-end mb-4">

                          <input type="text" oninput="search_user(this.value)" 
                          name="" class="form-control w-25 ms-auto" placeholder="Search">
                        </div>

                        <div class="table-responsive " >
                            <table class="table table-hover border-0 text-center" style="min-width: 1300px;">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date Of Registration</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="users-data" class="text-center">

                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>







            </div>
        </div>
    </div>

    

    



    <?php
    require('inc/scripts.php');
    ?>

 <script src="scripts/users.js"></script>

</body>

</html>