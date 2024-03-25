<?php
require('inc/links.php');
require('inc/essentials.php');
adminLogin();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
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
                <h3 class="mb-4">SETTINGS</h3>

                <!-- General Settings section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class=" card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> EDIT
                            </button>
                        </div>

                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>

                    </div>
                </div>

                <!-- General setting modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Settings</h1>

                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title:</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-bold">About Us:</label>
                                        <textarea rows="6" name="site_about" id="site_about_inp" class="form-control" style="resize:none;" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>

                                    <button type="submit" onclick="" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- General Setting Shutdown Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class=" card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>

                                    <input onchange="upd_shutdown(this.value)" type="checkbox" class="form-check-input" id="shutdown-toggle" />
                                </form>

                            </div>
                        </div>


                        <p class="card-text" id="site_about">
                            No Customers will be allowed to book hotel rooms when shutdown mode is turned on!
                        </p>

                    </div>
                </div>



                <!-- contact details section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class=" card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contacts Settings</h5>
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> EDIT
                            </button>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">

                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">

                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">

                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1"><i class="bi bi-telephone-fill"></i> <span id="pn1"></span></p>

                                    <p class="card-text"><i class="bi bi-telephone-fill"></i> <span id="pn2"></span></p>
                                </div>
                                <div class="mb-4">

                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">

                                    <h6 class="card-subtitle mb-3 fw-bold">Social Links</h6>
                                    <p class="card-text mb-2.2"> <i class="bi bi-instagram me-1"> </i><span id="insta"></span></p>

                                    <p class="card-text mb-2.2"><i class="bi bi-github me-1"></i><span id="git"></span></p>

                                    <p class="card-text "><i class="bi bi-linkedin me-1"></i><span id="ln"></span></p>
                                </div>
                                <div class="">

                                    <h6 class="card-subtitle mb-1 fw-bold">I-frame</h6>
                                    <iframe loading="lazy" class="border p-2 w-100" id="iframe"></iframe>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>


                <!-- Contact details Modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Contacts Settings</h1>

                                </div>
                                <div class="modal-body">

                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Address:</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google Map Link:</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone Numbers (with country code):</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="pn1" id="pn1_inp" class="form-control" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="number" name="pn2" id="pn2_inp" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Email:</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social Links:</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-github"></i></span>
                                                        <input type="text" name="git" id="git_inp" class="form-control" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-linkedin"></i></span>
                                                        <input type="text" name="ln" id="ln_inp" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Iframe Src:</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button onclick="contacts_inp(contacts_data)" type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>

                                    <button type="submit" onclick="" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Management Team section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class=" card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management Team </h5>
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                                <i class="bi bi-plus-square"></i> ADD
                            </button>
                        </div>

                        <div class="row" id="team-data">

                        </div>



                    </div>
                </div>

                <!-- Management  team Modal -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Add Member</h1>

                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name:</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-bold">Picture:</label>
                                        <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button onclick="" type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>

                                    <button type="submit" onclick="" class="btn custom-bg text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <?php
    require('inc/scripts.php');
    ?>

    <script>
        let general_data, contacts_data;

        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let contacts_s_form = document.getElementById('contacts_s_form');

        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById('member_name_inp');
        let member_picture_inp = document.getElementById('member_picture_inp');



        general_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        })









        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');




            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            //    xhr.onreadystatechange = function(){
            //     if(this.readyState==4 && this.status==200)
            //    }
            // the above same code can be written as : 
            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);


                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }
            xhr.send('get_general');
        }





        // submit button function
        function upd_general(site_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() {


                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes Saved!');
                    get_general();

                } else {
                    alert('error', 'No Changes Made!');
                }

            }

            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
        }


        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() {

                if (this.responseText == 1 && general_data.shutdown == 0) {
                    alert('success', 'Site Shut Down Successfully! ');


                } else {
                    alert('success', 'Site is Working!');
                }
                get_general();
            }

            xhr.send('upd_shutdown=' + val);
        }




        function get_contacts() {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'insta', 'git', 'ln'];

            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            //    xhr.onreadystatechange = function(){
            //     if(this.readyState==4 && this.status==200)
            //    }
            // the above same code can be written as : 
            xhr.onload = function() {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for (i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                }
                iframe.src = contacts_data[9];
                contacts_inp(contacts_data);

            }
            xhr.send('get_contacts');
        }


        function contacts_inp(data) {
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'insta_inp', 'git_inp', 'ln_inp', 'iframe_inp'];

            for (i = 0; i < contacts_inp_id.length; i++) {
                document.getElementById(contacts_inp_id[i]).value = data[i + 1];
            }

        }


        contacts_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_contacts();
        });

        function upd_contacts() {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'insta', 'git', 'ln', 'iframe'];
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'insta_inp', 'git_inp', 'ln_inp', 'iframe_inp'];

            let data_str = "";
            for (i = 0; i < index.length; i++) {
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += 'upd_contacts';
            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() {

                var myModal = document.getElementById('contacts-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes Saved! ');
                    get_contacts();


                } else {
                    alert('error', 'No changes made!');
                }

            }
            xhr.send(data_str);
        }




        team_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_member();
        })

        function add_member() {
            let data = new FormData();
            data.append('name', member_name_inp.value);
            data.append('picture', member_picture_inp.files[0]);
            data.append('add_member', '');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);



            xhr.onload = function() {
                console.log(this.responseText);


                var myModal = document.getElementById('team-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == "inv_img") {
                    alert('error', 'Only jpg,jpeg and png images are allowed!');

                } else if (this.responseText == 'inv_size') {
                    alert('error', 'image should be less than 2MB!');

                } else if (this.responseText == 'upd_failed') {
                    alert('error', 'Failed to upload image!');
                } else {
                    alert('success', 'New member Added!');
                    member_name_inp.value = '';
                    member_picture_inp.value = '';
                    get_members();

                }
            }

            xhr.send(data);

        }

        function get_members() {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() {
                document.getElementById('team-data').innerHTML = this.responseText;
            }
            xhr.send('get_members');
        }



        function rem_member(val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('success', 'Member Removed!');
                    get_members();
                } else {
                    alert('error', 'Server down!');
                }
            }
            xhr.send('rem_member=' + val);
        }

        window.onload = function() {
            get_general();
            get_contacts();
            get_members();
        }
    </script>
</body>

</html>